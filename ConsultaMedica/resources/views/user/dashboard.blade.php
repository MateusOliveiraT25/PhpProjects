@extends('layouts.app')

@section('content')
    <br><br><br>
    <h1>Dashboard de Consultas</h1>

    <form method="GET" action="{{ route('dashboard') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Pesquisar consultas..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach ($consultas as $consulta)
            <div class="col-md-4 mb-4"> <!-- Ajusta a largura do cartão -->
                <div class="card" style="width: 100%; height: 100%;">
                    <!-- Verifica se a imagem existe e se é válida -->
                    @if($consulta->img)
                        <img src="{{ asset('storage/images/' . $consulta->img) }}" class="card-img-top" alt="{{ $consulta->nome }}">
                    @else
                        <img src="{{ asset('assets/img/img0.png') }}" class="card-img-top" alt="Imagem padrão">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.2rem;">Dr: {{ $consulta->nome }}</h5>
                        <p class="card-text" style="font-size: 0.9rem;">CRM: {{ $consulta->crm }}</p>
                        <p class="card-text" style="font-size: 0.9rem;">Especialidade: {{ $consulta->especialidade }}</p>
                        <p class="card-text" style="font-size: 0.9rem;">Período: {{ $consulta->periodo }}</p>
                        <p class="card-text" style="font-size: 0.9rem;">Data da Consulta: {{ \Carbon\Carbon::parse($consulta->data_consulta)->format('d/m/Y') }}</p>
                        <p class="card-text" style="font-size: 0.9rem;">Status: {{ $consulta->status }}</p>
                        <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-primary btn-sm">Ver Consulta</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
