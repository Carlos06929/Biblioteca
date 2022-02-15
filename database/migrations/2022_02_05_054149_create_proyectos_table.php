<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->integer('numero_inventario')->nullable();
            $table->text('signatura_topografica')->nullable();
            $table->string('estado')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->string('lugar')->nullable();
            $table->string('editor')->nullable();
            $table->integer('anio')->nullable();
            $table->string('pais')->nullable();
            $table->string('edicion')->nullable();
            $table->text('isbn')->nullable();
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
        Schema::dropIfExists('proyectos');
    }
}
