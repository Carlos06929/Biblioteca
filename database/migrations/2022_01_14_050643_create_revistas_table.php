<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revistas', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('numero_inventario')->nullable();
            $table->string('signatura_topografica')->nullable();
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('idioma')->nullable();
            $table->text('autor')->nullable();
            $table->text('categoria')->nullable();
            $table->string('lugar')->nullable();
            $table->string('editorial')->nullable();
            $table->integer('anio')->nullable();
            $table->string('pais')->nullable();
            $table->text('isbn')->nullable();
            $table->integer('cantidad_paginas')->nullable();
            $table->string('dimensiones')->nullable();
            $table->string('material_anexo')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('ejemplares')->nullable();
            $table->integer('ultimoEjemplar')->nullable();
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
        Schema::dropIfExists('revistas');
    }
}
