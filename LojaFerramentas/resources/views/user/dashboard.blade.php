@extends('layouts.app')

@section('content')


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

   
    </div>
</div>
@endsection
