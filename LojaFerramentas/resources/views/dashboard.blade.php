@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Bem-vindo, {{ Auth::user()->name }}! Você está autenticado.</p>

    <div class="card mt-4">
        <div class="card-header">
            Informações do Usuário
        </div>
        <div class="card-body">
            <p><strong>Nome:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Data de Registro:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('user.logout') }}" class="btn btn-danger"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Sair
        </a>

        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection
