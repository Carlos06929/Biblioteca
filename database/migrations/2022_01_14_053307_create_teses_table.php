<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('ninv');
            $table->string('sgtopografica')->nullable();
            $table->integer('disponible')->nullable(); //area titulo 
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('idioma'); //area autor
            $table->integer('autores')->nullable(); //area edición 
            $table->string('lugar')->nullable();
            $table->string('editor')->nullable();
            $table->integer('ano')->nullable();
            $table->string('pais')->nullable(); //area de descripcion
            $table->integer('cantpag');
            $table->string('dimensiones')->nullable();
            $table->string('matAnexo')->nullable();//descrpcion del temario
            $table->text('dscTemario');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('teses');
    }
}
