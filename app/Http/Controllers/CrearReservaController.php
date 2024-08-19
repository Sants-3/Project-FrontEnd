<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class CrearReservaController extends Controller
{
    public function index()
    {
        return view("crear_reserva");
    }

    public function crearReserva(Request $request){
        $fechaReserva = $request->input("fecha_reserva");
        $numeroReserva = $request->input("numero_reserva");
        $pasajeroReserva = $request->input("pasajero");

        //URL del endpoint de la API REST
        $baseUri = 'http://localhost:8093/api/reserva/asociar';

        try {
            $cliente = new Client([
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);

            $url = $baseUri . '/' . $pasajeroReserva;

            $data = [
                'json' => [
                    'fechaReserva' => $fechaReserva,
                    'numeroReserva'=> $numeroReserva
                ]
            ];



            $response = $cliente->request('POST', $url, $data);

            if ($response->getStatusCode() == 200) {
                return redirect(route('reserva.lista'));
            } else {
                return response()->json(['error' => 'Error al consumir el API'], $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }

    public function obtenerReserva(){
        $cliente = new Client();

        $url_get = 'http://localhost:8093/api/reserva/obtener/todos';
        $obtener_todos = $cliente->request('GET', $url_get);

        $data = json_decode($obtener_todos->getBody(), true);


        return view('lista_reservas', compact('data'));
    }
}
