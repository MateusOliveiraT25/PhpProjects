@extends('layouts.app')

@section('content')
    <div class="mt-5 pt-4"></div>

    <div class="container">
        <!-- Seção de Remédios -->
        <h1>Remédios Disponíveis</h1>
        <div class="row">
            @foreach ($consultas as $consulta)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Verifica se a imagem existe e se é válida -->
                        @if($consulta->img)
                            <img src="{{ asset('storage/images/' . $consulta->img) }}" class="card-img-top" alt="{{ $consulta->nome }}">
                        @else
                            <img src="{{ asset('assets/img/img0.png') }}" class="card-img-top" alt="{{ $consulta->nome }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $consulta->nome }}</h5>
                            <p class="card-text">{{ $consulta->descricao }}</p>
                            <p class="card-text">Preço: R$ {{ number_format($consulta->preco, 2, ',', '.') }}</p>
                            <p class="card-text">Fabricante: {{ $consulta->fabricante }}</p>
                            <!-- Botão para visualizar detalhes do remédio -->
                            <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-primary">Ver Remédio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Espaçamento inferior -->
        <div class="mt-4"></div>

       
    </div>
@endsection
