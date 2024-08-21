<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use Illuminate\Support\Facades\Storage;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultas = Consulta::all();
        return view('consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'crm' => 'nullable|string',
            'especialidade' => 'nullable|string',
            'horario' => 'nullable|date_format:H:i|after_or_equal:07:00|before_or_equal:20:00',
            'data_consulta' => 'nullable|date',
            'status' => 'nullable|string' // Adicionado para validação
        ]);

        $data = $request->all();

        // Define o status como 'pendente' se não for fornecido
        if (empty($data['status'])) {
            $data['status'] = 'pendente';
        }

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['img'] = $filename;
        }

        Consulta::create($data);

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consulta $consulta)
    {
        return view('consultas.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consulta $consulta)
    {
        return view('consultas.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consulta $consulta)
{
    // Validação dos dados recebidos
    $validatedData = $request->validate([
        'nome' => 'required|string|max:255',
        'crm' => 'nullable|string',
        'especialidade' => 'nullable|string',
        'horario' => 'nullable|string|date_format:H:i|after_or_equal:07:00|before_or_equal:20:00',
        'data_consulta' => 'nullable|date|after_or_equal:today',
        'status' => 'nullable|string'
    ]);

    // Atualiza o objeto Consulta com os dados validados
    $consulta->update($validatedData);

    // Redireciona com mensagem de sucesso
    return redirect()->route('consultas.index')->with('success', 'Consulta atualizada com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consulta $consulta)
    {
        // Delete the image if it exists
        if ($consulta->img) {
            Storage::delete('public/images/' . $consulta->img);
        }

        $consulta->delete();

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta deletada com sucesso.');
    }
}
