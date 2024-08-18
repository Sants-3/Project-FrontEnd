<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripulacionController extends Controller
{
    public function assignPiloto($idVuelo)
    {
        $vuelo = Vuelo::findOrFail($idVuelo);
        $pilotos = Piloto::all();
        return view('tripulacion.assign', compact('vuelo', 'pilotos'));
    }

    public function store(Request $request, $idVuelo)
    {
        $request->validate([
            'piloto_id' => 'required|exists:pilotos,id',
        ]);

        $tripulacion = Tripulacion::updateOrCreate(
            ['vuelo_id' => $idVuelo],
            ['piloto_id' => $request->piloto_id]
        );

        return redirect()->route('vuelos.index')->with('success', 'Piloto asignado correctamente.');
    }
}
