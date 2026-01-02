<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/login/submit', [AuthController::class, 'login_Submit'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register/submit', [AuthController::class, 'register'])->name('register.submit');

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
