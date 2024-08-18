@extends('layouts.app')

@section('content')

<br><br>
<h1 class="my-4">Remédios</h1>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<a class="btn btn-success mb-2" href="{{ route('remedios.create') }}">Criar Novo Remédio</a>

<table class="table table-bordered">
    <tr>
        <th>N°</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Fabricante</th>
        <th>Data de Validade</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($remedios as $remedio)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $remedio->nome }}</td>
        <td>{{ $remedio->categoria }}</td>
        <td>{{ $remedio->quantidade }}</td>
        <td>{{ $remedio->preco }}</td>
        <td>{{ $remedio->fabricante }}</td>
        <td>{{ $remedio->data_validade }}</td>
        <td>
            <form action="{{ route('remedios.destroy', $remedio->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('remedios.edit', $remedio->id) }}">Editar</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
