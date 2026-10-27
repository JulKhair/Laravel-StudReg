<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistrationController::class, 'home'])->name('home');

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');

Route::post('/register', [RegistrationController::class, 'submitForm'])->name('register.submit');
