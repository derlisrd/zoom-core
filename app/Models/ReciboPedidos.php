<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReciboPedidos extends Model
{
    protected $table='recibo_pedidos';
    protected $fillable = [
        'user_id',
        'cliente_id',
        'nros_pedidos',
        'fecha',
        'total'
    ];
}
