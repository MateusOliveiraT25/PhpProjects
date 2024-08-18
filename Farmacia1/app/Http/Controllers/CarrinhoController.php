<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Remedio;

class CarrinhoController extends Controller
{
    public function add(Request $request, Remedio $remedio)
    { 
        $dados = $request->validate([
            'quantidade'=>'required|numeric|min:1'
        ]);
    Carrinho::create(['id_remedio'=>$remedio->id,"id_user"=>Auth::id(),'quantidade'=>$request->quantidade]);
    
    return redirect()->with('sucess', 'Remedio adicionado ao Carrinho') ;
}


}