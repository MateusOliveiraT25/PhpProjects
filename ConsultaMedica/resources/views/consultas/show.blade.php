@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <!-- Verifica se a imagem existe e se é válida -->
                @if($consulta->img)
                    <img src="{{ asset('storage/images/' . $consulta->img) }}" class="img-fluid" alt="{{ $consulta->nome }}">
                @else
                    <img src="{{ asset('assets/img/img1.png') }}" class="img-fluid" alt="Imagem padrão">
                @endif
            </div>
            
            <div class="col-md-6">
                <h2>Médico(a): {{ $consulta->nome }}</h2>
                <p><strong>Especialidade:</strong> {{ $consulta->especialidade }}</p>
                <p><strong>Data da consulta:</strong> {{ \Carbon\Carbon::parse($consulta->data_consulta)->format('d/m/Y') }}</p>
                <p><strong>Horário da consulta:</strong> {{ \Carbon\Carbon::parse($consulta->horario)->format('H:i') }}</p>
                <p><strong>Local da consulta: </strong>Av. Antonio Ometto, 45 - Vila Claudia, Limeira - SP</p>
                <p><strong>Telefone: </strong>(19) 3451-6912</p>

                <!-- Instruções para o dia da consulta -->
                <h5>Instruções para o dia da consulta:</h5>
                <ul>
                    <li>Chegar ao local com pelo menos 15 minutos de antecedência.</li>
                    <li>Trazer um documento de identidade com foto e o cartão do plano de saúde (se aplicável).</li>
                    <li>Manter o uso de máscara nas dependências do consultório.</li>
                    <li>Se necessário, traga seus exames médicos ou outros documentos relevantes.</li>
                    <li>Caso precise cancelar, informe com pelo menos 24 horas de antecedência.</li>
                </ul>

                <!-- Botão para agendar consulta -->
                <form method="POST" action="{{ route('agendamentos.store') }}">
                    @csrf
                    <input type="hidden" name="consulta_id" value="{{ $consulta->id }}">
                    <button type="submit" class="btn btn-primary">Agendar consulta</button>
                </form>
            </div>
        </div>
    </div>
@endsection
