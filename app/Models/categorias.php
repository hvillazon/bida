<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    public function Categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categorias::class);
    }
}
