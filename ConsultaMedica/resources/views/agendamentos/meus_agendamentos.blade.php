@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Meus Agendamentos</h1>

        <!-- Verifique se há mensagens de sucesso ou erro -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tabela de agendamentos -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Médico</th>
                    <th>Data da Consulta</th>
                    <th>Horário da Consulta</th>
                    <th>Data do Agendamento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($agendamentos as $agendamento)
                    <tr>
                        <td>{{ $agendamento->consulta->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($agendamento->consulta->data_consulta)->format('d/m/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($agendamento->consulta->horario)->format('H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Nenhum agendamento encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
