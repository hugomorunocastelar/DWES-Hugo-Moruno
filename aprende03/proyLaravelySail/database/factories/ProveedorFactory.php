<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nif' => fake()->regexify('[XYZ]{1}[0-9]{7}-[A-Z]{1}'),
            'nombreApellidos' => fake()->sentence(2),
            'razonSocial' => fake()->sentence(8),
            'comentario' => fake()->paragraph,
        ];
    }
}
