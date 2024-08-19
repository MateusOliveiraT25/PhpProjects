@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Criar Remédio</h1>

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

        <form action="{{ route('consultas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control" placeholder="Descrição"></textarea>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" placeholder="Categoria">
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" class="form-control" placeholder="Preço">
            </div>

            <!-- Campo Fabricante -->
            <div class="form-group">
                <label for="fabricante">Fabricante:</label>
                <input type="text" name="fabricante" class="form-control" placeholder="Fabricante">
            </div>

            <!-- Campo Data de Validade -->
            <div class="form-group">
                <label for="data_validade">Data de Validade:</label>
                <input type="date" name="data_validade" class="form-control">
            </div>

            <!-- Campo Imagem -->
            <div class="form-group">
                <label for="img">Imagem:</label>
                <input type="file" name="img" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
