<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get("/users", function (Request $request) {
    $q = $request->query('q');

    $users = User::query()
        ->when($q, fn($qr) => $qr
            ->where('name', 'like', "%{$q}%"))
        ->orderBy('name')->get();

    return Inertia::render("Users", ["users" => $users, 'q' => $q]);
});

require __DIR__ . "/counter.php";
