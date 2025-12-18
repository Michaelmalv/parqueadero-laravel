<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    // Listar vehículos activos
    public function index()
    {
        $vehiculos = Vehiculo::where('activo', true)->get();
        return view('vehiculos.index', compact('vehiculos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('vehiculos.create');
    }

    // Guardar vehículo
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|max:10',
            'tipo' => 'required|in:carro,moto,camioneta',
        ]);

        Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo registrado correctamente');
    }

    // Mostrar formulario de edición
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    // Actualizar vehículo
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'placa' => 'required|max:10',
            'tipo' => 'required|in:carro,moto,camioneta',
        ]);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo actualizado correctamente');
    }

    // Marcar salida (eliminación lógica)
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->update(['activo' => false]);

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo marcado como salido');
    }
}
