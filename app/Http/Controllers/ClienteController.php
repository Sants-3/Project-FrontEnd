<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('DetallesClientes', compact('cliente'));
    }
}