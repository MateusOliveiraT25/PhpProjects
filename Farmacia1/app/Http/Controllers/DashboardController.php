<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedio; // Certifique-se de importar o modelo Remedio

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $remedios = Remedio::when($search, function ($query, $search) {
            return $query->where('nome', 'like', "%{$search}%")
                         ->orWhere('descricao', 'like', "%{$search}%")
                         ->orWhere('fabricante', 'like', "%{$search}%");
        })->get();

        return view('user.dashboard', compact('remedios'));
    }
}
