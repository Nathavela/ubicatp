<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('resenias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('resenias');
    }
};



class CreateReseniasTable extends Migration
{
    public function up()
    {
        Schema::create('resenias', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->integer('calificacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resenias');
    }
}

