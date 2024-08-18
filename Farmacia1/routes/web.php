<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RemedioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Middleware\RemediosMiddleware;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/registro', [UserController::class, 'showRegistroForm'])->name('user.registro');//showRegistroForm



Route::post('/registro', [UserController::class, 'registro'])->name('user.register');// Rota para processar o registro


Route::get('/login', [UserController::class, 'showLoginForm'])->// Rota para exibir o formulário de login
name('user.login');

// Rota para processar o login
Route::post('/login', [UserController::class, 'login'])->
name('user.login');
// Rota para logout
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');




// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');



//routa p/ remedios
Route::resource('remedios', RemedioController::class)->middleware(RemediosMiddleware::class)->except('show');
//routa remedio especifico
Route::get('remedios/{remedio}', [RemedioController::class, 'show'])->middleware('auth')->name('remedios.show');

Route::post('carrinho/add{remedio}',[CarrinhoController::class, 'add'])->middleware('auth')->name('carrinho.add');