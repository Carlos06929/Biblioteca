<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('carrera');
            $table->integer('registro');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('lugarNacimiento');
            $table->date('fechaNacimiento');
            $table->string('nacionalidad');
            $table->string('domicilio')->nullable();
            $table->string('ciudad');
            $table->integer('telefono')->nullable();
            $table->string('correo')->nullable();
            
            $table->string('profesion');
            $table->string('image')->nullable();
            $table->bigInteger('ajax1')->nullable();
            $table->bigInteger('ajax2')->nullable();
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
        Schema::dropIfExists('estudiantes');
    }
}
