<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Consulta;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    // Exibir o formulário de agendamento
    public function create($consulta_id)
    {
        $consulta = Consulta::findOrFail($consulta_id);
        return view('agendamentos.create', compact('consulta'));
    }

    // Processar o agendamento
    public function store(Request $request)
    {
        $request->validate([
            'consulta_id' => 'required|exists:consultas,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'data_agendamento' => 'required|date',
        ]);

        Agendamento::create($request->all());

        return redirect()->route('consultas.index')->with('success', 'Consulta agendada com sucesso.');
    }

    // Mostrar um agendamento específico
    public function show($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamentos.show', compact('agendamento'));
    }

    // Excluir um agendamento
    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();

        return redirect()->route('consultas.index')->with('success', 'Agendamento excluído com sucesso.');
    }
}
