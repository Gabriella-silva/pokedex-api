<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pokedex extends Model
{
    protected $fillable = [
        'nome',
        'tipo',
        'pokefacts',
    ];
}
