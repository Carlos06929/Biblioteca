<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('numero_inventario')->nullable();
            $table->string('signatura_topografica')->nullable();
            $table->string('estado')->nullable();
            $table->string('idioma')->nullable();
            $table->string('titulo')->nullable();
            $table->text('autor')->nullable();
            $table->string('lugar')->nullable();
            $table->string('editor')->nullable();
            $table->string('edicion')->nullable();
            $table->integer('anio')->nullable();
            $table->string('pais')->nullable();
            $table->integer('cantidad_paginas')->nullable();
            $table->string('dimensiones')->nullable();
            $table->string('material_anexo')->nullable();
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
        Schema::dropIfExists('planes');
    }
}
