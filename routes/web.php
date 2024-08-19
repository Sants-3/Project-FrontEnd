<?php

use App\Http\Controllers\AvionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CrearReservaController;
use App\Http\Controllers\CrearVueloController;
use App\Http\Controllers\InformeVueloController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\TripulacionController;
use Illuminate\Support\Facades\Route;
//Rutas Login y Sign up
Route::get('/', function () {
    return view('login');
})->name('cliente.login');

Route::get('/sign', [
    ClienteController::class, 'index'
])->name('cliente.registro');

//Ruta para crear cliente o pasajero
Route::post('/crear_cliente/guardar', [
    ClienteController::class, 'crearCliente'
])->name('cliente.registro.guardar');

//Rutas para vuelos
Route::get('/crear_vuelo', [
    CrearVueloController::class, 'index'
]);

Route::post('/crear_vuelo/guardar', [
    CrearVueloController::class, 'crearVuelo'

])->name("vuelo.crear");

Route::get('/lista_vuelos', [
    CrearVueloController::class, 'obtenerVuelo'
])->name('vuelos.lista');

//Rutas para reservas
Route::get('/crear_reserva', [
    CrearReservaController::class, 'index'
]);

Route::post('/crear_reserva/guardar', [
    CrearReservaController::class, 'crearReserva'
])->name('reserva.crear');

Route::get('/lista_reservas', [
    CrearReservaController::class, 'obtenerReserva'
])->name('reserva.lista');

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

    Route::get('/crear_tripulacion', [
        TripulacionController::class, 'crearTripulacion'
    ]);
    
    Route::post('/crear_tripulacion/save', [
        TripulacionController::class, 'guardarTripulacion'
    ])->name('tripulacion.crear');
    
    Route::get('/crear_avion', [
        AvionController::class, 'crearAvion'
    ]);
    
    Route::get('/crear_mantenimiento/{codigoAvion}', [
        MantenimientoController::class, 'crearMantenimiento'
    ])->name("crear.mantenimineto");
    
    Route::get('/mostrar_aviones', [
        AvionController::class, 'mostrarAviones'
    ]);
    
    Route::get('/mostrar_mantenimientos/{codigoAvion}', [
        MantenimientoController::class, 'mostrarMantenimiento'
    ])->name("obtener.manteniminetos");
    
    Route::post('/crear_avion/save', [
        AvionController::class, 'guardarAvion'
    ])->name('avion.crear');
    
    Route::post('/crear_mantenimiento/save/{codigoAvion}', [
        MantenimientoController::class, 'guardarMantenimiento'
    ])->name('salvar.mantenimineto');

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
