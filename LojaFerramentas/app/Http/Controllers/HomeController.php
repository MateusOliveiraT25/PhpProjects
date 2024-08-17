<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Certifique-se de que o modelo Produto está no namespace correto

class HomeController extends Controller
{
    public function index()
    {
        // Pegue os 5 produtos mais recentes
        $produtos = Produto::latest()->take(5)->get();
        return view('home', compact('produtos'));
    }
}
