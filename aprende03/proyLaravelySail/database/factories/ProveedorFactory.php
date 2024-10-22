<?php

namespace Database\Factories;

use App\Models\Proveedor;
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
            'nombre' => $persona ? fake()->firstName():null,
            'apellido1' => $persona ? fake()->lastName():null,
            'apellido2' => $persona ? fake()->lastName():null,
            'razonSocial' => $persona ? null : fake()->company(),
            'denominacion' => fake()->company(),
            'autonomo' => fake()->boolean(),
            'comentario' => fake()->optional()->text(),

        ];
    }
}
