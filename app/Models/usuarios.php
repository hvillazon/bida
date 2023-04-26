<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    protected $hidden =[
        'id',
        'nombre',
        'contraseña',
        'estado',
        'remember_token',
    ];
}
