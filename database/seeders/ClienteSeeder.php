<?php

namespace Database\Seeders;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::factory(10)->create();

        Cliente::firstOrCreate(
            ['nro_documento' => '12345678'],
            [
                'nombre'    => 'Juan',
                'apellidos' => 'Pérez Gómez',
                'correo'    => 'juan.perez@example.com',
                'telefono'  => '987654321',
            ]
        );
    }
}
