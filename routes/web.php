<?php

<<<<<<< HEAD
use App\Http\Controllers\CrearReservaController;
use App\Http\Controllers\CrearVueloController;
use App\Http\Controllers\ItinerarioController;
=======
use App\Http\Controllers\CrearVueloController;
>>>>>>> 7b2635a2148fb6ab878f4eb4c50de2f66fa7d86a
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
//Rutas Vuelo
=======

>>>>>>> 7b2635a2148fb6ab878f4eb4c50de2f66fa7d86a
Route::get('/crear_vuelo', [
    CrearVueloController::class, 'index'
]);

<<<<<<< HEAD
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
=======
Route::get('/informes/vuelos', [
    InformeVueloController::class, 'index'
]);

Route::get('/aviones/{idAvion}/mantenimiento/create', [
    MantenimientoController::class, 'create'])->name('mantenimiento.create');
Route::post('/aviones/{idAvion}/mantenimiento', [

    MantenimientoController::class, 'store'])->name('mantenimiento.store');
Route::get('/aviones/{idAvion}/mantenimiento', [
    MantenimientoController::class, 'index'])->name('mantenimiento.index');

Route::get('/clientes', [
    ClienteController::class, 'index'])->name('clientes.index');

Route::get('/clientes/{id}', [
    ClienteController::class, 'show'])->name('clientes.show');

Route::get('/informes/vuelos', [
    InformeVueloController::class, 'index']);

Route::get('/vuelos/{idVuelo}/assign', [
    TripulacionController::class, 'assignPiloto'])->name('tripulacion.assign');

Route::post('/vuelos/{idVuelo}/assign', [
    TripulacionController::class, 'store'])->name('tripulacion.store');

Route::post('/crear_vuelo/guardar', [
    CrearVueloController::class, 'crearVuelo'

])->name("vuelo.crear");

>>>>>>> 7b2635a2148fb6ab878f4eb4c50de2f66fa7d86a

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
