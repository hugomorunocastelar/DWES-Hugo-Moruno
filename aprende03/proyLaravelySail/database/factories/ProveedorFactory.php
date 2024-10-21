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
        $persona = fake()->boolean;
        return [
            'nif' => $persona ?
                fake()->regexify('[0-9]{8}-[A-Z]{1}')
                :
                fake()->regexify('[A-Z0-9]{1}[0-9]{7}-[A-Z]{1}'),
            'nombreApellidos' => $persona ? fake()->Name():null,
            'razonSocial' => $persona ? null : fake()->company(),
            'comentario' => fake()->optional()->text(),
        ];
    }
}
