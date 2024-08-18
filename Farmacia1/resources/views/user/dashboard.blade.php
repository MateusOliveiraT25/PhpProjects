@extends('layouts.app')


@section('content')
<br><br><br>
    <h1>Dashboard de Remedios</h1>


    <form method="GET" action="{{ route('dashboard') }}">
        <input type="text" name="search" placeholder="Pesquisar remedios..." value="{{ request('search') }}">
        <button type="submit">Pesquisar</button>
    </form>


    <div class="row">
        @foreach ($remedios as $remedio)
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/img0.png" class="card-img-top" alt="{{ $remedio->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $remedio->nome }}</h5>
                        <p class="card-text">{{ $remedio->descricao }}</p>
                        <p class="card-text">Preço: R$ {{ $remedio->preco }}</p>
                        <a href="{{ route('remedios.show', $remedio->id) }}" class="btn btn-primary">Ver Remedio</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection




