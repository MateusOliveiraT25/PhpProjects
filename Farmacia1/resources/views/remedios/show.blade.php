@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/img0.png" class="img-fluid" alt="{{ $remedio->nome }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $remedio->nome }}</h2>
                <p><strong>Categoria:</strong> {{ $remedio->categoria }}</p>
                <p><strong>Descrição:</strong> {{ $remedio->descricao }}</p>
                <p><strong>Fabricante:</strong> {{ $remedio->fabricante }}</p> <!-- Novo campo -->
                <p><strong>Data de Validade:</strong> {{ $remedio->data_validade }}</p> <!-- Novo campo -->
                <p><strong>Preço:</strong> R$ {{ $remedio->preco }}</p>

                <form method="POST" action="{{ route('carrinho.add', $remedio->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="quantidade">Selecione a quantidade</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" value="1">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>
@endsection
