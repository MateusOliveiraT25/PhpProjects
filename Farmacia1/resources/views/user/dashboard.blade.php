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
        @foreach ($remedios as $remedio)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Verifica se a imagem existe e se é válida -->
                    @if($remedio->img)
                        <img src="{{ asset('storage/images/' . $remedio->img) }}" class="card-img-top" alt="{{ $remedio->nome }}">
                    @else
                        <img src="{{ asset('assets/img/img0.png') }}" class="card-img-top" alt="{{ $remedio->nome }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $remedio->nome }}</h5>
                        <p class="card-text">{{ $remedio->descricao }}</p>
                        <p class="card-text">Preço: R$ {{ number_format($remedio->preco, 2, ',', '.') }}</p>
                        <!-- Adiciona o fabricante ao card -->
                        <p class="card-text">Fabricante: {{ $remedio->fabricante }}</p>
                        <a href="{{ route('remedios.show', $remedio->id) }}" class="btn btn-primary">Ver Remédio</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
