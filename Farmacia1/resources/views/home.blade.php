@extends('layouts.app')

@section('content')
    <!-- Espaçamento superior para compensar o cabeçalho fixo -->
    <div class="mt-5 pt-4"></div>

    <div class="container">
        <!-- Carrossel de Remedios -->
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($remedios as $index => $remedio)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <!-- Certifique-se de fornecer o caminho correto para a imagem -->
                        <img src="/assets/img/img0.png" class="d-block w-100" alt="{{ $remedio->nome }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $remedio->nome }}</h5>
                            <p>{{ $remedio->descricao }}</p>
                            <p>Preço: R$ {{ number_format($remedio->preco, 2, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>

        <!-- Espaçamento inferior -->
        <div class="mt-4"></div>

        <!-- Links de Login e Registro -->
        <div class="text-center">
            <a href="/login" class="btn btn-primary btn-lg me-2">Login</a>
            <a href="/registro" class="btn btn-secondary btn-lg">Registro</a>
        </div>
    </div>

@endsection

<!-- Seção para exibir mensagens de erro -->
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
