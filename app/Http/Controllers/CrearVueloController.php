<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class CrearVueloController extends Controller
{
    public function index()
    {
        return view("crear_vuelo");
    }

    public function crearVuelo(Request $request)
    {
        // $idVuelo = $request->input("id");
        $origen = $request->input("origen");
        $destino = $request->input("destino");
        $numeroVuelo = $request->input("numero_vuelo");
        $horaSalida = $request->input("hora_salida");
        $horaLlegada = $request->input("hora_llegada");
        $fechaSalida = $request->input("fecha_salida");
        $fechaRegreso = $request->input("fecha_regreso");

        //URL del endpoint de la API REST
        $url = '';

        try {
            $cliente = new Client([
                'base_uri' => $url,
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);

            $data = [
                'json' => [
                    // 'id' => $idVuelo,
                    'origen ' => $origen,
                    'destino' => $destino,
                    'numero_vuelo' => $numeroVuelo,
                    'hora_salida' => $horaSalida,
                    'hora_llegada' => $horaLlegada,
                    'fecha_salida' => $fechaSalida,
                    'fecha_regreso' => $fechaRegreso,
                ]
            ];

            $response = $cliente->request('POST', $url, $data);

            if ($response->getStatusCode() == 200) {
                return view('lista_vuelos');
            } else {
                return response()->json(['error' => 'Error al consumir el API'], $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }

    public function obtenerEstadoVuelo(){
        return view('estado_vuelo');
    }

    public function obtenerVuelo(){
        return view('buscar_vuelo');
    }
}