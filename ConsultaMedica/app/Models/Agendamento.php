<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'consulta_id',
        'nome',
        'email',
        'data_agendamento',
    ];

    // Define o relacionamento com o modelo Consulta
    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }
}
