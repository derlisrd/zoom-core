<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable=[
        'cliente_id',
        'user_id',

        'total',
        'total_neto',
        'total_exenta',
        'total_iva',
        'total_iva5',
        'total_iva10',

        'numero',
        'pedidos',
        'pagado',

        'condicion',
        'estado',
        'tipo_pago',

        'fecha_cobro',
        'fecha',

        'motivo_cancelacion'
    ];
}
