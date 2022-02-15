<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_portada');
            $table->text('signatura_topografica')->nullable();
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('idioma')->nullable();
            $table->string('lugar')->nullable();
            $table->string('editor')->nullable();
            $table->integer('anio')->nullable();
            $table->string('pais')->nullable();
            $table->string('editorial')->nullable();
            $table->string('edicion')->nullable();
            $table->text('isbn')->nullable();
            $table->integer('cantidad_paginas')->nullable();
            $table->string('dimensiones')->nullable();
            $table->string('otras_caracteristicas')->nullable();
            $table->text('material_anexo')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('ejemplares')->nullable();
            $table->integer('ultimoEjemplar')->nullable();

            $table->string('autor')->nullable();
            $table->string('categoria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
