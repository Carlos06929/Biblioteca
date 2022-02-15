<?php

namespace Database\Factories;
use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'carrera' =>$this->faker->randomElement(['sociología','turismo','educación']),
            'registro' => $this->faker->randomElement(['218015356','218024975','218008384','218015372']),
            'ci' => $this->faker->randomElement(['8080814','8226422','8940481','8711229']),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'lugarNacimiento' =>  $this->faker->word(),
            'fechaNacimiento' =>$this->faker->randomElement(['2015-01-10','2018-05-25','2014-08-15','2020-12-12']),
            'nacionalidad' =>  $this->faker->word(),
            'domicilio' => $this->faker->address(),
            'ciudad' =>  $this->faker->word(),
            'telefono' => $this->faker->randomElement(['74940481','67711536','65023894','78081456']),
            'correo' => $this->faker->unique()->safeEmail(),          
            'profesion' =>  $this->faker->word(),
            'image' =>$this->faker->randomElement(['logo.png','predeterminada.png']),
        ];

    }
}
