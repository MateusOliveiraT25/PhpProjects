@extends('layouts.app')

@section('content')
<br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Verifica se a imagem existe e se é válida -->
                @if($consulta->img)
                    <img src="{{ asset('storage/images/' . $consulta->img) }}" class="img-fluid" alt="{{ $consulta->nome }}">
                @else
                    <img src="{{ asset('assets/img/img0.png') }}" class="img-fluid" alt="Imagem padrão">
                @endif
            </div>
            
            <div class="col-md-6">
                <h2>Dr:{{ $consulta->nome }}</h2>
               <p><strong>Especialidade:</strong> {{ $consulta->especialidade }}</p>
                <p><strong>CRM:</strong> {{ $consulta->crm }}</p>
                <p><strong>Data da consulta:</strong> {{ \Carbon\Carbon::parse($consulta->data_validade)->format('d/m/Y') }}</p>
               

                <form method="POST" action="{{ route('agendamento.store', $consulta->id) }}">
                    @csrf
                   
                    <button type="submit" class="btn btn-primary mt-3">Agendar consulta</button>
                </form>
            </div>
        </div>
    </div>
@endsection
