<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    public function create(): Response
    {
        return Inertia::render("auth/Register");
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "string", "max:255", 'email', 'unique:users,email'],
            "password" => ["required", "string", "min:6", "confirmed"],
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => $data["password"],
        ]);

        Auth::login($user);

        return redirect()->intended("/dashboard")->with("success", "Registered Successfully");
    }
}
