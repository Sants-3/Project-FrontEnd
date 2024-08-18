<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CrearVueloController;
use App\Http\Controllers\InformeVueloController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\TripulacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/crear_vuelo', [
    CrearVueloController::class, 'index'
]);

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
