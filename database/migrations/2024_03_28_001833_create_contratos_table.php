<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
