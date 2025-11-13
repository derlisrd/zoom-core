<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecibosItems extends Model
{
    protected $table = 'recibos_items';
    protected $fillable = [
        'recibo_id',
        'factura_id'
    ];
}
