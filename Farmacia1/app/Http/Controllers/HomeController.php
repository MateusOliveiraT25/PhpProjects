<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedio;

class HomeController extends Controller
{
    public function index()
    {
        // Pega os 3 últimos remédios com base na data de criação
        $remedios = Remedio::latest()->take(3)->get();
        return view('home', compact('remedios'));
    }
}
