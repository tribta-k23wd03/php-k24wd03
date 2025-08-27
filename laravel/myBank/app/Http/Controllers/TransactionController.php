<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class TransactionController extends Controller
{
    public function index(Request $request, Account $account): Response
    {
        $this->authorizeAccount($request, $account);

        $txs = $account->transactions()
            ->orderBy('created_at', 'desc')
            ->paginate(10, [
                'id',
                'type',
                'amount',
                'balance_after',
                'memo',
                'created_at'
            ]);

        return Inertia::render(
            'Transactions/Index',
            ['transactions' => $txs]
        );
    }

    public function createDeposit(Request $request, Account $account): Response
    {
        $this->authorizeAccount($request, $account);
        return Inertia::render('Transactions/Deposit', [
            'account' => $account->only(
                'id',
                'number',
                'name',
                'currency'
            )
        ]);
    }
    public function storeDeposit(Request $request, Account $account)
    {
        $this->authorizeAccount($request, $account);

        $data = $request->validate([
            'amount' => ['required', 'gt:0'],
            'memo' => ['required']
        ]);

        DB::transaction(function () use ($request, $account, $data) {
            $acc = Account::where('id', $account->id)->lockForUpdate()->first();

            $newBalance = bcadd($acc->balance, $data['amount'], 4);

            Transaction::create([
                'account_id' => $acc->id,
                'type' => 'deposit',
                'amount' => $data['amount'],
                'balance_after' => $newBalance,
                'memo' => $data['memo'],
                'created_by' => $request->user()->id
            ]);
            $acc->update(['balance' => $newBalance]);
        });

        return back()->with('success', 'Deposit Done.');
    }

    public function createWithdraw(Request $request, Account $account): Response
    {
        $this->authorizeAccount($request, $account);
        return Inertia::render('Transactions/Withdraw', [
            'account' => $account->only(
                'id',
                'number',
                'name',
                'currency'
            )
        ]);
    }
    public function storeWithdraw(Request $request, Account $account)
    {
        $this->authorizeAccount($request, $account);

        $data = $request->validate([
            'amount' => ['required', 'gt:0'],
            'memo' => ['required']
        ]);

        DB::transaction(function () use ($request, $account, $data) {
            $acc = Account::where('id', $account->id)->lockForUpdate()->first();

            $newBalance = bcsub($acc->balance, $data['amount'], 4);

            Transaction::create([
                'account_id' => $acc->id,
                'type' => 'withdraw',
                'amount' => $data['amount'],
                'balance_after' => $newBalance,
                'memo' => $data['memo'],
                'created_by' => $request->user()->id
            ]);
            $acc->update(['balance' => $newBalance]);
        });
        return back()->with('success', 'Withdraw Done.');
    }

    private function authorizeAccount(Request $request, Account $account): void
    {
        if ($account->user_id !== $request->user()->id) {
            abort(403); // Un-Authorized.
        }
    }
}
