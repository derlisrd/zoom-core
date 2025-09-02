<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $fillable=[
        'cliente_id',
        'numero',
        'total',
        'efectivo',
        'transferencia',
        'cheque',
        'cheque_numero',
        'banco',
        'fecha',
        'obs',
    ];
}
