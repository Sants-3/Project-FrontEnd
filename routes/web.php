<?php

use App\Http\Controllers\CrearVueloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/crear_vuelo', [
    CrearVueloController::class, 'index'
]);


Route::post('/crear_vuelo/guardar', [
    CrearVueloController::class, 'crearVuelo'
])->name("vuelo.crear");


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
