<?php

use App\Http\Controllers\VagaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Correto: Passar a classe do controlador diretamente
Route::resource('vagas', VagaController::class);
