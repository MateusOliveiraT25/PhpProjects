<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Verifica se o usuário está autenticado
         if (!Auth::check()) {
            return redirect('/login')->withErrors('Você precisa estar logado para ver as consultas.');
        }

        $consultas = Consulta::all(); // Ajuste conforme a lógica de recuperação das consultas

        return view('home', compact('consultas'));
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
        $request->validate([
            'nome' => 'required|string|max:255',
            'crm' => 'nullable|string',
            'especialidade' => 'nullable|string',
            'horario' => 'nullable|string',
            'data_consulta' => 'nullable|date',
            'status' => 'nullable|string' // Adicionado para validação
        ]);

        $data = $request->all();

        if ($request->hasFile('img')) {
            // Delete the old image if it exists
            if ($consulta->img) {
                Storage::delete('public/images/' . $consulta->img);
            }

            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['img'] = $filename;
        }

        $consulta->update($data);

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta atualizada com sucesso.');
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
