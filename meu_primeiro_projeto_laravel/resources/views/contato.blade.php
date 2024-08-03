<!-- resources/views/contato.blade.php -->
@extends('layouts.master')


<body>
    @include('components.header')

    <div class="container">
        <h1>Contato</h1>
        <p>Telefone: {{ $contato['telefone'] }}</p>
        <p>Email: {{ $contato['email'] }}</p>
        <p>Endereço: {{ $contato['endereco'] }}</p>
    </div>

    @include('components.footer')
</body>

