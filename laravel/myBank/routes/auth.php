<?php

use App\Http\Controllers\auth\AuthenticatedSessionController;
use App\Http\Controllers\auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware("guest")->group(function () {

    Route::get("/login", [AuthenticatedSessionController::class, "create"])->name("login");
    Route::post("/login", [AuthenticatedSessionController::class, "store"]);

    Route::get("/register", [RegisteredUserController::class, "create"])->name("register");
    Route::post("/register", [RegisteredUserController::class, "store"]);
});

Route::middleware("auth")->group(function () {


    Route::get("/dashboard", function () {
        return Inertia::render('Dashboard');
    });
    Route::post("/logout", [AuthenticatedSessionController::class, "destroy"]);
});
