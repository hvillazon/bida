<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'descripcion',
        'nombre',
        'estado',
        'precio',
        'imagen',
        'categoria_id'
    ];
}
