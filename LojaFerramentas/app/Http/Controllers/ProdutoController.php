<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|numeric',
          
        ]);
        Produto::create($request->all());

        return redirect()->route('produtos.index')
        ->with('success', 'Produto criado com sucesso.');

    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        return view('produtos.edit',compact('produto'));
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|numeric',
          
        ]);
        Produto::create($request->all());

        return redirect()->route('produtos.index')
        ->with('success', 'Produto criado com sucesso.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produto.index')
                         ->with('success', 'Produto Deletado com Sucesso.');

    }
}