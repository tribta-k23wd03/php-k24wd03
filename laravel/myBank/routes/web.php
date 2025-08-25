<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', ['appName' => config('app.name', 'Default Name')]);
})->name('home');
