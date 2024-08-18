<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function create($idAvion)
    {
        $avion = Avion::findOrFail($idAvion);
        return view('mantenimiento.create', compact('avion'));
    }

    public function store(Request $request, $idAvion)
    {
        $request->validate([
            'fecha' => 'required|date',
            'descripcion' => 'required|string|max:255',
            'operario' => 'required|string|max:255',
        ]);

        Mantenimiento::create([
            'avion_id' => $idAvion,
            'fecha' => $request->fecha,
            'descripcion' => $request->descripcion,
            'operario' => $request->operario,
        ]);

        return redirect()->route('mantenimiento.index', $idAvion)->with('success', 'Mantenimiento registrado correctamente.');
    }

    public function index($idAvion)
    {
        $avion = Avion::findOrFail($idAvion);
        $mantenimientos = $avion->mantenimientos()->orderBy('fecha', 'desc')->get();
        return view('mantenimiento.mantenimiento', compact('avion', 'mantenimientos'));
    }
}