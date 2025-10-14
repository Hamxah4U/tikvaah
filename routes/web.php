<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\SessionController;

Route::get('/', [GenderController::class, 'index'])->name('home');
Route::post('/store', [UserController::class, 'store'])->name('store');

Route::post('/login', [SessionController::class, 'store'])->name('login');
?>