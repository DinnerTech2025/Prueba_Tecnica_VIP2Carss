<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    //Metodo de Listado de Vehiculos y Clientes
    public function index()
    {
        $vehiculos = Vehiculo::with('cliente')->get();
        return view('pages.index', compact('vehiculos'));
    }

    //Metodo de Registro de Vehiculos y Clientes
    public function store(Request $request)
    {
        $validated = $request->validate([
            'placa' => 'required|string|max:20|unique:vehiculos,placa',
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'anio_fabricacion' => 'required|integer|min:1900|max:2099',

            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:150',
            'nro_documento' => 'required|string|max:20|unique:clientes,nro_documento',
            'correo' => 'required|email|unique:clientes,correo',
            'telefono' => 'required|string|max:20',
        ]);

        $cliente = Cliente::create([
            'nombre' => $validated['nombre'],
            'apellidos' => $validated['apellidos'],
            'nro_documento' => $validated['nro_documento'],
            'correo' => $validated['correo'],
            'telefono' => $validated['telefono'],
        ]);

        Vehiculo::create([
            'placa' => $validated['placa'],
            'marca' => $validated['marca'],
            'modelo' => $validated['modelo'],
            'anio_fabricacion' => $validated['anio_fabricacion'],
            'cliente_id' => $cliente->id,
        ]);

        return redirect()->back()->with('success', 'Vehículo y cliente registrados correctamente.');
    }

    //Metodo de Edicion de Vehiculos y Clientes
    public function edit($id)
    {   
        $vehiculo = Vehiculo::with('cliente')->findOrFail($id);
        return view('pages.index', compact('vehiculo'));
    }

    //Metodo de Actualizacion de Vehiculos y Clientes
    public function update(Request $request, $id)
    {

        $request->validate([
            'placa'           => 'required|string|max:10',
            'marca'           => 'required|string|max:100',
            'modelo'          => 'required|string|max:100',
            'anio_fabricacion'=> 'required|integer|min:1900|max:2099',
            'nombre'          => 'required|string|max:100',
            'apellidos'       => 'required|string|max:150',
            'nro_documento'   => 'required|string|max:20',
            'correo'          => 'required|email|max:150',
            'telefono'        => 'required|string|max:20',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);

        $vehiculo->update([
            'placa'            => $request->placa,
            'marca'            => $request->marca,
            'modelo'           => $request->modelo,
            'anio_fabricacion' => $request->anio_fabricacion,
        ]);

        if ($vehiculo->cliente) {
            $vehiculo->cliente->update([
                'nombre'        => $request->nombre,
                'apellidos'     => $request->apellidos,
                'nro_documento' => $request->nro_documento,
                'correo'        => $request->correo,
                'telefono'      => $request->telefono,
            ]);
        }

        return redirect()->back()->with('success', 'Vehículo y cliente actualizados correctamente.');
    }

    //Metodo de Eliminacion de Vehiculos y Clientes
    public function destroy($id)
    {
         $vehiculo = Vehiculo::findOrFail($id);

        if ($vehiculo->cliente) {
            $vehiculo->cliente->delete();
        }

        $vehiculo->delete();

        return redirect()->route('encuestas.index')
                        ->with('success', 'Registro eliminado correctamente');
    }
}
