<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'ref' => fake()->regexify('[A-Z]{3}-[0-9]{3}'),
            'descripción' => fake()->sentence(5),
            'precio' => fake()->randomFloat(2,0,500),
            'observaciones' => fake()->paragraph,

        ];
    }
}