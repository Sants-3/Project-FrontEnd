<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvionController extends Controller
{
    public function show($id)
    {
        $avion = Avion::findOrFail($id);
        return view('avion.avion', compact('avion'));
    }
}