<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReciboPedidosItems extends Model
{
    protected $table='recibo_pedidos_items';
    protected $fillable = [
        'recibo_id',
        'pedido_id',
        'total'
    ];
}
