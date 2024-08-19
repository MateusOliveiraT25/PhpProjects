@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Editar Remédio</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('consultas.update', $consulta->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ old('nome', $consulta->nome) }}" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control" placeholder="Descrição">{{ old('descricao', $consulta->descricao) }}</textarea>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $consulta->categoria) }}" placeholder="Categoria">
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" class="form-control" value="{{ old('quantidade', $consulta->quantidade) }}" placeholder="Quantidade">
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" class="form-control" value="{{ old('preco', $consulta->preco) }}" placeholder="Preço">
            </div>

            <!-- Campo Fabricante -->
            <div class="form-group">
                <label for="fabricante">Fabricante:</label>
                <input type="text" name="fabricante" class="form-control" value="{{ old('fabricante', $consulta->fabricante) }}" placeholder="Fabricante">
            </div>

            <!-- Campo Data de Validade -->
            <div class="form-group">
                <label for="data_validade">Data de Validade:</label>
                <input type="date" name="data_validade" class="form-control" value="{{ old('data_validade', $consulta->data_validade) }}">
            </div>

            <!-- Campo Imagem -->
            <div class="form-group">
                <label for="img">Imagem:</label>
                @if ($consulta->img)
                    <div>
                        <img src="{{ Storage::url('public/images/' . $consulta->img) }}" alt="Imagem do Remédio" width="150">
                    </div>
                @endif
                <input type="file" name="img" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
