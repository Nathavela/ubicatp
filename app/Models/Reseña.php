<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    protected $fillable = ['contenido', 'calificacion'];

    public function arrendatario()
    {
        return $this->belongsTo(Arrendatario::class);
    }

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
}


