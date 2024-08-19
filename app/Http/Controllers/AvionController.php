<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    public function show($id)
    {
        return view('avion.avion', compact('avion'));
    }

    public function crearAvion(){
        return view('crearAvion');
    }

    public function mostrarAviones(){

        $client = new Client();

        try {
            // Hacer la solicitud GET a la API de Spring Boot
            $response = $client->request('GET', 'http://localhost:8093/api/avion/obtener/todos');
            
            // Obtener el cuerpo de la respuesta
            $aviones = json_decode($response->getBody(), true);
            
            // Pasar los datos a la vista
            return view('mostrarAviones', compact('aviones'));
        } catch (\Exception $e) {
            // Manejo de errores
            return view('mostrarAviones', ['error' => 'Error al obtener los datos de la API']);
        }
    }

    public function guardarAvion(Request $request){

        $datosAvion = [
            'modelo' => $request->input("modelo"),
            'matricula' => $request->input("matricula"),
            'capacidad' => $request->input("capacidad")
        ];

        $client = new Client();

        try {
            // Hacer una solicitud POST
            $response = $client->request('POST', 'http://localhost:8093/api/avion/crear', [
                'json' => $datosAvion// Enviar los datos como JSON
            ]);
    
            // Obtener la respuesta del servidor
            $responseBody = $response->getBody()->getContents();
    
            // Puedes hacer algo con la respuesta si es necesario
            echo 'Respuesta de la API: ' . $responseBody;
    
        }
        catch (RequestException $e) {
            // Manejar errores en la solicitud
            echo 'Error en la solicitud: ' . $e->getMessage();
        }

       
        return redirect("/mostrar_aviones");
        
    }
}