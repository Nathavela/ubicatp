<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arrendatario extends Model
{
    protected $fillable = ['nombre', 'email'];
    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }

    public function reseñas()
    {
        return $this->hasMany(Reseña::class);
    }
   
    public function arrendatario()
    {
        return $this->belongsTo(Arrendatario::class);
    }

}


