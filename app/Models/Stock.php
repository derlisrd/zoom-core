<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';

    protected $fillable = [
        'producto_id',
        'deposito_id',
        'cantidad',
        'graduacion_esferico',
        'graduacion_cilindrico',
        'eje',
        'adicion',
        'base',
        'lado'
    ];
}
