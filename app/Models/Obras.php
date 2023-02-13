<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nombre','id_genero', 'id_artista', 'precio', 'fecha_creacion','tipo'
    ];
    
}
