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
        $tripulacion = $request->input("tripulacion");
        $avion = $request->input("tipo_avion");

        //URL del endpoint de la API REST
        $url = 'http://localhost:8093/api/vuelo/crear';

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
                    // 'ciudadOrigen ' => $origen,
                    // 'ciudadDestino' => $destino,
                    'numeroVuelo' => $numeroVuelo,
                    'estadoVuelo' => "Activo",
                    'horaSalida' => $horaSalida,
                    'horaLlegada' => $horaLlegada,
                    'fechaSalida' => $fechaSalida,
                    'fechaLlegada' => $fechaRegreso,
                    'tripulacion' => [
                        'codigoTripulacion' => $tripulacion
                    ],
                    'avion' => [
                        'codigoAvion' => $avion
                    ],
                    'origen' => [
                        'codigoCiudad' => $origen
                    ],
                    'destino' => [
                        'codigoCiudad' => $destino
                    ]
                ]
            ];

            $response = $cliente->request('POST', $url, $data);

            if ($response->getStatusCode() == 200) {
                return redirect()->route('vuelos.lista');
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
        $cliente = new Client();

        $url_get = 'http://localhost:8093/api/vuelo/obtener';
        $obtener_todos = $cliente->request('GET', $url_get);

        $data = json_decode($obtener_todos->getBody(), true);


        return view('lista_vuelos', compact('data'));
    }
}