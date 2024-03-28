<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['contenido', 'fecha_inicio', 'fecha_fin'];

    public function arrendatario()
    {
        return $this->belongsTo(Arrendatario::class);
    }

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
    
    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class);
    }
}

