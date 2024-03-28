<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $fillable = ['direccion', 'num_pisos', 'normas'];

    public function reseñas()
    {
        return $this->hasMany(Reseña::class);
    }

    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
}

