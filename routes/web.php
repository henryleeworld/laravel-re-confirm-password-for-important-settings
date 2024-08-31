<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SecretsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/secrets', [SecretsController::class, 'show'])->name('secrets')->middleware('password.confirm');
