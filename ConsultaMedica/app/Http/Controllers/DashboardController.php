<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta; // Certifique-se de importar o modelo Consulta

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $consultas = Consulta::when($search, function ($query, $search) {
            return $query->where('nome', 'like', "%{$search}%")
                         ->orWhere('descricao', 'like', "%{$search}%")
                         ->orWhere('fabricante', 'like', "%{$search}%");
        })->get();

        return view('user.dashboard', compact('consultas'));
    }
}
