<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Hash;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'usuario' => 'moderador',
                'clave' => Hash::make('moderador'),
                'id_rol' => 1, //Moderador
            ],
            [
                'usuario' => 'visitante',
                'clave' => Hash::make('visitante'),
                'id_rol' => 2, //Visitante
            ],
        ];

        foreach ($usuarios as $usuario) {
            Usuario::create($usuario);
        }
    }
}
