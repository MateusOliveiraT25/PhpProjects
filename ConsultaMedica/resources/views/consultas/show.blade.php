@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Verifica se a imagem existe e se é válida -->
                @if($consulta->img)
                    <img src="{{ asset('storage/images/' . $consulta->img) }}" class="img-fluid" alt="{{ $consulta->nome }}">
                @else
                    <img src="{{ asset('assets/img/img0.png') }}" class="img-fluid" alt="{{ $consulta->nome }}">
                @endif
            </div>
            <div class="col-md-6">
                <h2>{{ $consulta->nome }}</h2>
                <p><strong>Categoria:</strong> {{ $consulta->categoria }}</p>
                <p><strong>Descrição:</strong> {{ $consulta->descricao }}</p>
                <p><strong>Fabricante:</strong> {{ $consulta->fabricante }}</p>
                <p><strong>Data de Validade:</strong> {{ \Carbon\Carbon::parse($consulta->data_validade)->format('d/m/Y') }}</p>
                <p><strong>Preço:</strong> R$ {{ number_format($consulta->preco, 2, ',', '.') }}</p>

                <form method="POST" action="{{ route('carrinho.add', $consulta->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="quantidade">Selecione a quantidade:</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" value="1">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>
@endsection
