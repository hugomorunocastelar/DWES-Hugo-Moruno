<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Proveedor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hugo',
            'email' => 'hugo@hugo.hugo',
            'password' => 'hugo'
        ]);

        Articulo::factory(10)->create();
        Proveedor::factory(10)->create();

    }
}
