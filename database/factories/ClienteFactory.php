<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'nro_documento' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
