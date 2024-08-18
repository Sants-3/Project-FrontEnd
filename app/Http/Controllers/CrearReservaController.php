<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearReservaController extends Controller
{
    public function index()
    {
        return view("crear_reserva");
    }
}
