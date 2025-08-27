<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function index(Request $request): Response
    {
        $accounts = Account::query()
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->get(['id', 'number', 'name', 'currency', 'balance']);
        return Inertia::render('Accounts/Index', ['accounts' => $accounts]);
    }

    public function create(): Response
    {
        return Inertia::render('Accounts/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'currency' => ['required', 'char', 'size:3']
        ]);

        $number = 'AC' . Str::random(10);

        $account = Account::create([
            'id' => $request->user()->id,
            'name' => $data['name'],
            'currency' => strtoupper($data['currency']),
            'number' => $number,
            'balance' => 0
        ]);

        return redirect("/accounts/{$account->id}/transactions")
            ->with('success', 'Bank Account created!');
    }
}
