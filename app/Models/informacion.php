<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informacion extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'descripcion',
        'facebook',
        'instagram' ,
        'rappi',
        'tiktok' ,
        'horario'
    ];
}