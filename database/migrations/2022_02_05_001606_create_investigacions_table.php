<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigacions', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('numero_inventario')->nullable();
            $table->string('signatura_topografica')->nullable();
            $table->string('estado')->nullable();
            $table->string('titulo')->nullable();
            $table->string('tema')->nullable();
            $table->string('idioma')->nullable();
            $table->text('autor')->nullable();
            $table->string('lugar')->nullable();
            $table->string('editorial')->nullable();
            $table->string('edicion')->nullable();
            $table->integer('anio')->nullable();
            $table->string('pais')->nullable();
            $table->text('isbn')->nullable();
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
        Schema::dropIfExists('investigacions');
    }
}
