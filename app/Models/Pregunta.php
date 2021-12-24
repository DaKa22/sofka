<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'categorias_id',
    ];
    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'preguntas_id');
    }
}
