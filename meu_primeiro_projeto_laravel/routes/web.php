<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    // Dados dos produtos (simulação de dados de um banco de dados)
    $produtos = [
        ['id' => 1, 'nome' => 'Camiseta Hulk', 'preco' => 100.00],
        ['id' => 2, 'nome' => 'Camiseta Batman', 'preco' => 150.00],
        ['id' => 3, 'nome' => 'Camiseta Super Choque', 'preco' => 180.00],
    ];

    // Informações de contato (simulação de dados de um banco de dados)
    $contato = [
        'telefone' => '(19) 98687-5678',
        'email' => 'contato@gmail.com',
        'endereco' => 'Av. Carlos Gomes, 157, Centro - Limeira',
    ];

    // Retorna a view 'home' passando os dados de produtos e contato
    return view('home', compact('produtos', 'contato'));
});

// Rota para a página de produtos
Route::get('/produtos', function () {
    // Lista de produtos (simulação de dados de um banco de dados)
    $produtos = [
        ['id' => 1, 'nome' => 'Camiseta Hulk', 'preco' => 100.00],
        ['id' => 2, 'nome' => 'Camiseta Batman', 'preco' => 150.00],
        ['id' => 3, 'nome' => 'Camiseta Super Choque', 'preco' => 180.00],
    ];

    // Retorna a view 'produtos' passando a lista de produtos
    return view('produtos', compact('produtos'));
});

// Rota para a página de contato
Route::get('/contato', function () {
    // Informações de contato (simulação de dados de um banco de dados)
    $contato = [
        'telefone' => '(00) 1234-5678',
        'email' => 'contato@exemplo.com',
        'endereco' => 'Av. Exemplo, 123, Cidade Exemplo',
    ];

    // Retorna a view 'contato' passando as informações de contato
    return view('contato', compact('contato'));
});
