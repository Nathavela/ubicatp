<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    protected $fillable = ['nombre', 'tipo'];

    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
    

}
