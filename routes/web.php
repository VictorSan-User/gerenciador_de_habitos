<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\metaController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/login/submit', [AuthController::class, 'login_Submit'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register/submit', [AuthController::class, 'register'])->name('register.submit');

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');


//metas
Route::get('/metas', [metaController::class, 'index'])->name('metas.index');
Route::get('/metas/create', [metaController::class, 'create'])->name('metas.create');
Route::post('/metas/store', [metaController::class, 'store'])->name('metas.store');
