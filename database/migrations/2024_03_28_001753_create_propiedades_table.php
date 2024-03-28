<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};



class CreatePropiedadesTable extends Migration
{
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('direccion');
            $table->integer('num_pisos');
            $table->text('normas')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('propiedades');
    }
}

