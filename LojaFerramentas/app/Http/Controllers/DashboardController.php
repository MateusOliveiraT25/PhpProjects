<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Certifique-se de importar o modelo Produto

class DashboardController extends Controller
{
public function index(Request $request)
    {
        $search = $request->input('search');
        $produtos = Produto::when($search, function ($query, $search) {
            return $query->where('nome', 'like', "%{$search}%")
                         ->orWhere('descricao', 'like', "%{$search}%");
        })->get();


        return view('user.dashboard', compact('produtos'));
    }
}


