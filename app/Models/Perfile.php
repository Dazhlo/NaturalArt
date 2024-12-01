<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'nombre',
        'apellido',
        'foto',
        'telefono'
    ];
}
