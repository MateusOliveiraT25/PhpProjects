<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta; // Certifique-se de importar o modelo Consulta
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        // Filtrar consultas disponíveis e aplicar busca, se houver
        $consultas = Consulta::where('disponivel', true)
            ->when($search, function ($query, $search) {
                // Filtragem por nome ou CRM
                $query->where(function ($query) use ($search) {
                    $query->where('nome', 'like', "%{$search}%")
                          ->orWhere('crm', 'like', "%{$search}%");
                });
                
                // Verificar se a busca é uma data válida
                if ($this->isValidDate($search)) {
                    $query->orWhereDate('data_consulta', '=', $search);
                }
            })
            ->get();

        return view('user.dashboard', compact('consultas'));
    }

    // Função para verificar se a string é uma data válida
    protected function isValidDate($date)
    {
        // Define o formato esperado
        $format = 'Y-m-d';
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
}
