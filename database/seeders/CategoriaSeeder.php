<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Robótica',
            'Inteligencia Artificial',
        ];

        foreach ($categorias as $categoria) {
            Categoria::create([
                'categoria' => $categoria,
            ]);
        }
    }
}
