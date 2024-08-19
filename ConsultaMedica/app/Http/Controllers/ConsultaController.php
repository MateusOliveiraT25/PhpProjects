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
            'descricao' => 'required',
            'categoria' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|numeric',
            'fabricante' => 'nullable|string|max:255',
            'data_consulta' => 'nullable|date',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['img'] = $filename;
        }

        Consulta::create($data);

        return redirect()->route('consultas.index')
            ->with('success', 'Remédio criado com sucesso.');
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
            'descricao' => 'required',
            'categoria' => 'required',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
            'fabricante' => 'required|nullable|string|max:255',
            'data_consulta' => 'required|nullable|date',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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
            ->with('success', 'Remédio atualizado com sucesso.');
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
            ->with('success', 'Remédio deletado com sucesso.');
    }
}
