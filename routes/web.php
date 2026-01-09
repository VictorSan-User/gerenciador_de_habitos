<?php

use App\Http\Controllers\anotacoesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\metaController;
use App\Http\Controllers\tarefasController;
use Termwind\Components\Raw;

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
Route::get('/metas/{id}', [metaController::class, 'show'])->name('metas.show');
Route::get('/metas/{id}/edit', [metaController::class, 'edit'])->name('metas.edit');
Route::post('/metas/{id}/update', [metaController::class, 'update'])->name('metas.update');
Route::get('/metas/{id}/destroy/confirm', [metaController::class, 'destroy_confirm'])->name('metas.destroy.confirm');
Route::delete('/metas/{id}/destroy', [metaController::class, 'destroy'])->name('metas.destroy');

//tarefas
Route::get('/tarefas', [tarefasController::class, 'index'])->name('tarefas.index');
Route::get('/tarefas/create', [tarefasController::class, 'create'])->name('tarefas.create');
Route::post('/tarefas/store', [tarefasController::class, 'store'])->name('tarefas.store');
Route::get('/tarefas/{id}', [tarefasController::class, 'show'])->name('tarefas.show');
Route::get('/tarefas/{id}/edit', [tarefasController::class, 'edit'])->name('tarefas.edit');
Route::put('/tarefas/{id}/update', [tarefasController::class, 'update'])->name('tarefas.update');
Route::get('/tarefas/{id}/destroy', [tarefasController::class, 'destroy'])->name('tarefas.destroy');

//anotacoes
Route::get('/anotacoes', [anotacoesController::class, 'index'])->name('anotacoes.index');
Route::get('/anotacoes/create', [anotacoesController::class, 'create'])->name('anotacoes.create');
Route::post('/anotacoes/store', [anotacoesController::class, 'store'])->name('anotacoes.store');
Route::get('/anotacoes/{îd}/destroy', [anotacoesController::class, 'destroy'])->name('anotacoes.destroy');
