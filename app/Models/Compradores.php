<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compradores extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nombre','apellido', 'email', 'direccion', 'tarjeta_credito','codigo_seguridad','pregunta_seguridad1','respuesta_seguridad1','pregunta_seguridad2','respuesta_seguridad2','pregunta_seguridad3','respuesta_seguridad3'
    ];
}
