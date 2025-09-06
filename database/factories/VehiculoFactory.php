<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'placa' => strtoupper($this->faker->bothify('???-####')),
            'marca' => $this->faker->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan']),
            'modelo' => $this->faker->word(),
            'anio_fabricacion' => $this->faker->numberBetween(2000, 2023),
            'cliente_id' => Cliente::inRandomOrder()->first()->id ?? Cliente::factory(),
        ];
    }
}
