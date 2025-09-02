<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'categoria_id',
        'codigo',
        'nombre',
        'descripcion',
        'costo',
        'precio',
        'precio_minimo',
        'min_cilindrico',
        'max_cilindrico',
        'min_esferico',
        'max_esferico',
        'base_min',
        'base_max',
        'adicion_min',
        'adicion_max',
        'iva',
        'tipo'
    ];
}
