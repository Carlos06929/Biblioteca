<?php

namespace Database\Factories;

use App\Models\Evento\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Evento::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->word(),
            'tipo_evento' => $this->faker->word(),
            'hora_inicio' => $this->faker->randomElement(['10:00', '11:00', '09:00', '08:00', '12:00']),
            'fecha_inicio' =>  $this->faker->randomElement(['2015-01-10','2018-05-25','2014-08-15','2020-12-12']),
            'fecha_fin' =>  $this->faker->randomElement(['2015-01-10','2018-05-25','2014-08-15','2020-12-12']),
            'lugar' => $this->faker->word(),
            'estado' => $this->faker->randomElement(['1','2','3']),

        ];
    }
}
