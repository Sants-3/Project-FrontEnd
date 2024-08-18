<?php

use App\Http\Controllers\CrearReservaController;
use App\Http\Controllers\CrearVueloController;
use App\Http\Controllers\ItinerarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

//Rutas Vuelo
Route::get('/crear_vuelo', [
    CrearVueloController::class, 'index'
]);

Route::get('/estado_vuelo', [
    CrearVueloController::class, 'obtenerEstadoVuelo'
]);

Route::get('/buscar_vuelo', [
    CrearVueloController::class, 'obtenerVuelo'
]);

Route::post('/crear_vuelo/guardar', [
    CrearVueloController::class, 'crearVuelo'
])->name("vuelo.crear");

//Rutas Reserva
Route::get('/crear_reserva', [
    CrearReservaController::class, 'index'
]);

//Rutas Itinerario
Route::get('/itinerario', [
    ItinerarioController::class, 'index'
]);

//Ruta Login
// Route::get('/login', function(){
//  return view('login');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
