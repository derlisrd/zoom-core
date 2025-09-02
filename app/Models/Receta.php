<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'pedido_id',

        'codigo_derecho',
        'codigo_izquierdo',

        'adicion_derecho',
        'adicion_izquierdo',

        'cerca_derecho_cilindrico',
        'cerca_derecho_esferico',

        'cerca_eje_derecho',
        'cerca_eje_izquierdo',

        'cerca_izquierdo_cilindrico',
        'cerca_izquierdo_esferico',

        'lejos_derecho_cilindrico',
        'lejos_derecho_esferico',

        'lejos_eje_derecho',
        'lejos_eje_izquierdo',

        'lejos_izquierdo_cilindrico',
        'lejos_izquierdo_esferico',

        'dnp_izquierdo',
        'dnp_derecho',

        'altura_izquierdo',
        'altura_derecho'
    ];
}
