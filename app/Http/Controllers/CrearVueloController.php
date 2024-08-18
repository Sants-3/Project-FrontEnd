<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class CrearVueloController extends Controller
{
    public function index(){
        return view("crear_vuelo");
    }
    
    public function crearVuelo(Request $request){
        $idVuelo= $request->input("id");
        $origen = $request->input("origen");
        $destino = $request->input("destino");
        $numeroVuelo = $request->input("numero_vuelo");
        $horaSalida = $request->input("hora_salida");
        $horaLlegada = $request->input("hora_llegada");
        $fechaSalida = $request->input("fecha_salida");
        $fechaRegreso = $request->input("fecha_regreso");

        $vuelos=new Vuelo();
        
        $vuelos->idVuelo= $idVuelo;
        $vuelos->origen=$origen;
        $vuelos->destino=$destino;
        $vuelos->numeroVuelo=$numeroVuelo;
        $vuelos->horaSalida=$horaSalida;
        $vuelos->horaLlegada=$horaLlegada;
        $vuelos->fechaSalida=$fechaSalida;
        $vuelos->fechaRegreso=$fechaRegreso;

        $vuelos->save();

        return redirect("crear_vuelo");


    }
}