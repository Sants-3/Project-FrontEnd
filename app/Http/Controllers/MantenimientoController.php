<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
   public function mostrarMantenimiento($id){

    $client = new Client();

    try {
        // Hacer la solicitud GET a la API de Spring Boot
        $response = $client->request('GET', 'http://localhost:8093/api/avion/obtener/mantenimientos/'.$id);
        
        // Obtener el cuerpo de la respuesta
        $mantenimientos = json_decode($response->getBody(), true);
        
        // Pasar los datos a la vista
        return view('obtenerMantenimientos', compact('mantenimientos'));
    } catch (\Exception $e) {
        // Manejo de errores
        return view('obtenerMantenimientos', ['error' => 'Error al obtener los datos de la API']);
        }
    }

    public function crearMantenimiento($codigoAvion){
        $client = new Client();

    try {
        // Hacer la solicitud GET a la API de Spring Boot
        $response = $client->request('GET', 'http://localhost:8093/api/avion/obtener/'.$codigoAvion);
        
        // Obtener el cuerpo de la respuesta
        $avion = json_decode($response->getBody(), true);
        
        // Pasar los datos a la vista
        return view('agregarMantenimineto', compact('avion'));
    } catch (\Exception $e) {
        // Manejo de errores
        return view('obtenerMantenimientos', ['error' => 'Error al obtener los datos de la API']);
        }
    }

    public function guardarMantenimiento($codigoAvion, Request $request){
        $datosMantenimiento = [
            'fecha' => $request->input("fecha"),
            'descripcion' => $request->input("descripcion")
        ];

        $client = new Client();

        try {
            // Hacer una solicitud POST
            $response = $client->request('POST', 'http://localhost:8093/api/mantenimiento/asociar/'.$codigoAvion, [
                'json' => $datosMantenimiento// Enviar los datos como JSON
            ]);
    
            // Obtener la respuesta del servidor
            $responseBody = $response->getBody()->getContents();
    
            // Puedes hacer algo con la respuesta si es necesario
            echo 'Respuesta de la API: ' . $responseBody;
    
        }
        catch (\GuzzleHttp\Exception\RequestException $e) {
            // Manejar errores en la solicitud
            echo 'Error en la solicitud: ' . $e->getMessage();
        }

       
        return redirect("/mostrar_aviones");
    }
}