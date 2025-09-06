<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $clientes = Cliente::all();
        if ($clientes->isEmpty()) {
            $this->command->info('No hay clientes. Por favor, ejecute primero el ClienteSeeder.');
            return;
        }

        Vehiculo::factory(20)->create([
            'cliente_id' => $clientes->random()->id,
        ]);

        Vehiculo::create([
            'placa' => 'ABC123',
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'anio_fabricacion' => 2020,
            'cliente_id' => $clientes->first()->id,
        ]);
    }
}
