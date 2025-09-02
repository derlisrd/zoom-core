<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'factura_id',
        'cliente_id',
        'user_id',
        'armazon_id',

        'total',
        'total_neto',
        'total_iva',
        'total_exenta',

        'facturado',
        'codigo_cliente',
        'nro_factura',
        'obs_cliente',
        'obs_laboratorio',
        'estado_pago',
        'tipo',
        'motivo_cancelacion'

    ];
}
