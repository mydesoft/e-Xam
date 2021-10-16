<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PaymentController;

Route::get('/', [RegistrationController::class, 'home'])->name('home');
Route::post('/home', [RegistrationController::class, 'homeAction'])->name('homeAction');
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::get('/register', [RegistrationController::class, 'register'])->name('register');
Route::get('/reg-confirmation', [RegistrationController::class, 'registrationConfirmation'])->name('registerConfirm');
Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('/confirmation', [PaymentController::class, 'confirmation'])->name('confirmation');

