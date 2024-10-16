<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Auth; // Asegúrate de incluir esta línea


// Ruta de bienvenida
Route::get('/', function () {
    return view('auth.login');
});

// Genera las rutas de autenticación (login, register, etc.)
Auth::routes();
Route::resource('contactos', App\Http\Controllers\ContactoController::class)->middleware('auth');

// Ruta para el dashboard/home, después del login exitoso
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
