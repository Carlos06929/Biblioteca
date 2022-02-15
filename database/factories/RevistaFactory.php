<?php

namespace Database\Factories;
use App\Models\Revista;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class RevistaFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     *
     * @return array
     */
    protected $model=Revista::class;

    public function definition()
    {
        return [
            'image' =>$this->faker->randomElement(['libro2.jpg','rpredeterminada.jpg','libro4.jpg']),
            'numero_inventario' => $this->faker->randomElement(['218015356','218024975','218008384','218015372']),
            'signatura_topografica' => $this->faker->randomElement(['093.06 p613/v6 ej.01','094.07 p613/v6 ej.02','093.08 p613/v6 ej.04','093.10 p613/v8 ej.40']),
            'disponible' => $this->faker->randomElement(['Prestado','No prestado']),
            'titulo' => $this->faker->name(),
            'subtitulo' =>  $this->faker->word(),
            'idioma' =>$this->faker->randomElement(['Español','Ingles','Frances','Chino']),
            'autor' =>  $this->faker->name(),
            'categoria' => $this->faker->randomElement(['Novela','Historia','Fantasia']),
            'lugar' =>  $this->faker->randomElement(['madrid','Canada','Hong Kong','xd']),
            'editorial' => $this->faker->randomElement(['la cascada','Pauro','Paurito','dx']),
            'anio' => $this->faker->randomElement(['2010','2011','2012','2013','2014','2015']),
            'pais' =>  $this->faker->word(),
            'isbn' =>  $this->faker->randomElement(['494-048-1','54534-048-1','494-048-17435424','494-048-1787987','333-048-1','494-048-222']),
            'cantidad_paginas' =>  $this->faker->randomElement(['500','800','300','200','100',]),
            'dimensiones' =>  $this->faker->randomElement(['345x300','440x400','940x900','248x400',]),
            'material_anexo' =>  $this->faker->word(),
            'descripcion' =>  $this->faker->word(),
        ];
    }
}
