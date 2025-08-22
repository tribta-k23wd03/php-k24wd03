<?php

use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get("/test", [TestController::class, "index"]);
