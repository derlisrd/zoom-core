<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'ruc',
        'nombre',
        'nombre_fantasia',
        'telefono',
        'ciudad',
        'direccion',
        'tipo_pago'
    ];
}
