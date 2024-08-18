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
    <thead>
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
    </thead>
    <tbody>
        @foreach ($remedios as $remedio)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $remedio->nome }}</td>
            <td>{{ $remedio->categoria }}</td>
            <td>{{ $remedio->quantidade }}</td>
            <td>{{ number_format($remedio->preco, 2, ',', '.') }}</td> <!-- Formata o preço -->
            <td>{{ $remedio->fabricante }}</td>
            <td>{{ \Carbon\Carbon::parse($remedio->data_validade)->format('d/m/Y') }}</td> <!-- Formata a data -->
            <td>
                <form action="{{ route('remedios.destroy', $remedio->id) }}" method="POST" style="display:inline;">
                    <a class="btn btn-primary" href="{{ route('remedios.edit', $remedio->id) }}">Editar</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este remédio?')">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
