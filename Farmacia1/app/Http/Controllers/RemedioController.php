<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedio;
use Illuminate\Support\Facades\Storage;

class RemedioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $remedios = Remedio::all();
        return view('remedios.index', compact('remedios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('remedios.create');
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
            'data_validade' => 'nullable|date',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['img'] = $filename;
        }

        Remedio::create($data);

        return redirect()->route('remedios.index')
            ->with('success', 'Remédio criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Remedio $remedio)
    {
        return view('remedios.show', compact('remedio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Remedio $remedio)
    {
        return view('remedios.edit', compact('remedio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Remedio $remedio)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required',
            'categoria' => 'required',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
            'fabricante' => 'required|nullable|string|max:255',
            'data_validade' => 'required|nullable|date',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('img')) {
            // Delete the old image if it exists
            if ($remedio->img) {
                Storage::delete('public/images/' . $remedio->img);
            }

            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['img'] = $filename;
        }

        $remedio->update($data);

        return redirect()->route('remedios.index')
            ->with('success', 'Remédio atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remedio $remedio)
    {
        // Delete the image if it exists
        if ($remedio->img) {
            Storage::delete('public/images/' . $remedio->img);
        }

        $remedio->delete();

        return redirect()->route('remedios.index')
            ->with('success', 'Remédio deletado com sucesso.');
    }
}
