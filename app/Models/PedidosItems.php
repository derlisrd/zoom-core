<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidosItems extends Model
{
    protected $fillable = [
        'pedido_id',
        'producto_id',
        'deposito_id',
        'cantidad',
        'precio_venta',
        'lado_item'
    ];
}
