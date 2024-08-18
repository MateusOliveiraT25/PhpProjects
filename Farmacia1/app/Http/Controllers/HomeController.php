<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedio; // Certifique-se de que o modelo Remedio está no namespace correto

class HomeController extends Controller
{
    public function index()
    {
        // Pegue os 5 remedios mais recentes
        $remedios = Remedio::latest()->take(5)->get();
        return view('home', compact('remedios'));
    }
}
