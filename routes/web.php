<?php

use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SessionController;

Route::get('/', [GenderController::class, 'index'])->name('home');
Route::post('/store', [UserController::class, 'store'])->name('store');

Route::post('/login', [SessionController::class, 'store'])->name('login');

Route::middleware(['auth'])->group(function () {
  Route::get('/admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
  Route::get('/guest/dashboard', [GuestController::class, 'index'])->name('guest.dashboard');
  Route::get('/freelancer/dashboard', [FreelancerController::class, 'index'])->name('freelance.dashboard');

  
  Route::get('/paystack/callback', [GuestController::class, 'handleGatewayCallback'])->name('paystack.callback');
  Route::post('/paystack/payment', [GuestController::class, 'redirectToGateway'])->name('paystack.payment');
})

?>