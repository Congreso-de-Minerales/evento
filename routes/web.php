<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('evento')->name('evento.')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    // Nuevas rutas del menú
    Route::get('/patrocinadores', fn () => view('patrocinadores'))->name('patrocinadores.index');
    Route::get('/hoteles', fn () => view('hoteles'))->name('hoteles.index');
    Route::get('/cuotas', fn () => view('cuotas'))->name('cuotas.index');
    Route::get('/fechas', fn () => view('fechas'))->name('fechas.index');

    // Ruta para Programa
    Route::get('/programa', fn () => view('programa'))->name('programa.index');
    
    // Ruta para Trabajos
    Route::get('/trabajos', fn () => view('livewire.trabajos'))->name('trabajos.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
