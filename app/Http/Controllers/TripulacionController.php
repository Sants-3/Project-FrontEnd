<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TripulacionController extends Controller
{
    public function creartripulacion(){
        return view('crearTripulacion');
    }

    public function guardarTripulacion(Request $request){

        $datosTripulacion = [
            'nombre' => $request->input("nombre"),
            'rol' => $request->input("rol")
        ];

        $client = new Client();

        try {
            // Hacer una solicitud POST
            $response = $client->request('POST', 'http://localhost:8093/api/tripulacion/crear', [
                'json' => $datosTripulacion// Enviar los datos como JSON
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
