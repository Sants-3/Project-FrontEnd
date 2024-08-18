<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function index()
    {
        $vuelos = Vuelo::with('avion', 'tripulacion', 'reservas')->get();
        return view('vuelos.index', compact('vuelos'));
    }

    public function create()
    {
        return view('vuelos.create');
    }

    public function store(Request $request)
    {
        Vuelo::create($request->all());
        return redirect()->route('vuelos.index');
    }

    public function edit($id)
    {
        $vuelo = Vuelo::find($id);
        return view('vuelos.edit', compact('vuelo'));
    }

    public function update(Request $request, $id)
    {
        $vuelo = Vuelo::find($id);
        $vuelo->update($request->all());
        return redirect()->route('vuelos.index');
    }

    public function destroy($id)
    {
        $vuelo = Vuelo::find($id);
        $vuelo->delete();
        return redirect()->route('vuelos.index');
    }
}
