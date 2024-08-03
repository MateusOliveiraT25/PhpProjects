<?php
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Rota para a página de produtos, usando o controlador
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');

// Rota para exibir o formulário para adicionar um produto
Route::get('/produtos/adicionar', [ProdutoController::class, 'create'])->name('produtos.create');

// Rota para processar o envio do formulário e adicionar o produto
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

// Rota para a página de contato
Route::get('/contato', function () {
    return view('contato');
})->name('contato');
