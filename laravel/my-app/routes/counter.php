<?php

use App\Http\Controllers\CounterController;
use Illuminate\Support\Facades\Route;

Route::get("/counter", [CounterController::class, 'show'])->name('counter.show');
Route::post("/counter", [CounterController::class, 'update'])->name('counter.update');
