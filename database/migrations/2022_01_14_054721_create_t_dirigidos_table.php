<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDirigidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dirigidos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('numero_inventario')->nullable();
            $table->text('signatura_topografica')->nullable();
            $table->string('estado')->nullable();
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('idioma')->nullable();
            $table->string('autor')->nullable();
            $table->string('lugar')->nullable();
            $table->integer('anio')->nullable();
            $table->string('pais')->nullable();
            $table->integer('cantidad_paginas')->nullable();
            $table->string('dimensiones')->nullable();
            $table->text('material_anexo')->nullable();
            $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('t_dirigidos');
    }
}
