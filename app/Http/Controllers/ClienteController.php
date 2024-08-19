<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view("sign");
    }

    public function crearCliente(Request $request)
    {
        $nombre = $request->input("nombre");
        $apellido = $request->input("apellido");
        $correo = $request->input("correo");
        $password = $request->input("password");
        $dni = $request->input("dni");
        $telefono = $request->input("telefono");

        //URL del endpoint de la API REST
        $url = 'http://localhost:8093/api/pasajero/crear';

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
                    'nombre' => $nombre,
                    'apellido'=> $apellido,
                    'correo'=> $correo,
                    'password'=> $password,
                    'dni'=> $dni,
                    'telefono'=> $telefono
                ]
            ];



            $response = $cliente->request('POST', $url, $data);

            if ($response->getStatusCode() == 200) {
                return redirect(route('vuelos.lista'));
            } else {
                return response()->json(['error' => 'Error al consumir el API'], $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }
}