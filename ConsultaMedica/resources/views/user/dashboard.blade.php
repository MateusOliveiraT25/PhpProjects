@extends('layouts.app')

@section('content')
    <br><br><br>
    <h1>Dashboard de Remédios</h1>

    <form method="GET" action="{{ route('dashboard') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Pesquisar remédios..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach ($consultas as $consulta)
            <div class="col-md-3 mb-4"> <!-- Reduz a largura do cartão -->
                <div class="card" style="width: 100%; height: 100%;">
                    <!-- Verifica se a imagem existe e se é válida -->
                    @if($consulta->img)
                        <img src="{{ asset('storage/images/' . $consulta->img) }}" class="card-img-top" alt="{{ $consulta->nome }}">
                    @else
                        <img src="{{ asset('assets/img/img0.png') }}" class="card-img-top" alt="{{ $consulta->nome }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.2rem;">{{ $consulta->nome }}</h5> <!-- Reduz o tamanho da fonte -->
                        <p class="card-text" style="font-size: 0.9rem;">{{ $consulta->descricao }}</p> <!-- Reduz o tamanho da fonte -->
                        <p class="card-text" style="font-size: 0.9rem;">Preço: R$ {{ number_format($consulta->preco, 2, ',', '.') }}</p> <!-- Reduz o tamanho da fonte -->
                        <p class="card-text" style="font-size: 0.9rem;">Fabricante: {{ $consulta->fabricante }}</p> <!-- Reduz o tamanho da fonte -->
                        <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-primary btn-sm">Ver Remédio</a> <!-- Botão menor -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
