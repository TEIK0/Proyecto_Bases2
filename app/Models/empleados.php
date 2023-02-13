<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nombre','apellido', 'email', 'login', 'password', 'es_administrador'
    ];

}
