@extends('layouts.app')

@section('content')
    <br><br><br>
    <div class="container">
        <h1 class="mb-4">Consultas Disponíveis</h1>
    <div class="container">
        <h1 class="mb-4">Consultas Disponíveis</h1>

        <!-- Formulário de Pesquisa -->
        <form method="GET" action="{{ route('dashboard') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control form-control-lg" placeholder="Pesquisar consultas..." value="{{ request('search') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                </div>
            </div>
        </form>
        <!-- Formulário de Pesquisa -->
        <form method="GET" action="{{ route('dashboard') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control form-control-lg" placeholder="Pesquisar consultas..." value="{{ request('search') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                </div>
            </div>
        </form>

        <!-- Lista de Consultas Disponíveis -->
        <div class="row">
            @if ($consultas->where('disponivel', true)->count() > 0)
                @foreach ($consultas->where('disponivel', true) as $consulta)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            <!-- Verifica se a imagem existe e se é válida -->
                            @if($consulta->img)
                                <img src="{{ asset('storage/images/' . $consulta->img) }}" class="card-img-top" alt="{{ $consulta->nome }}">
                            @else
                                <img src="{{ asset('assets/img/img0.png') }}" class="card-img-top" alt="Imagem padrão">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">Médico(a): {{ $consulta->nome }}</h5>
                                <p class="card-text">CRM: {{ $consulta->crm }}</p>
                                <p class="card-text">Especialidade: {{ $consulta->especialidade }}</p>
                                <p class="card-text">Data da Consulta: {{ \Carbon\Carbon::parse($consulta->data_consulta)->format('d/m/Y') }}</p>
                                <p class="card-text">Horário da consulta: {{ \Carbon\Carbon::parse($consulta->horario)->format('H:i') }}</p>
                               
                                <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-primary">Ver Consulta</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <strong>Aviso:</strong> Não há consultas disponíveis no momento.
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
