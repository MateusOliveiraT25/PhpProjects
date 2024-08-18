<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produto;

class CarrinhoController extends Controller
{
    public function add(Request $request, Produto $produto)
    { 
        $dados = $request->validate([
            'quantidade'=>'required|numeric|min:1'
        ]);
    Carrinho::create(['id_produto'=>$produto->id,"id_user"=>Auth::id(),'quantidade'=>$request->quantidade]);
    
    return redirect()->with('sucess', 'Produto adicionado ao Carrinho') ;
}


}