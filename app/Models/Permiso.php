<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'modulo',
        'accion'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'permisos_otorgados')
            ->withPivot('otorgado')
            ->withTimestamps();
    }
}
