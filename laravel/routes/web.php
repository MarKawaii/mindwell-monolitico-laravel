<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AdminHomeController;
use App\Http\Controllers\Web\AuthGoogleController;
use App\Http\Controllers\Web\VistasEstaticasController;

//contenido  visible para todo publico
Route::resource('/', HomeController::class);
// Vistas estaticas
Route::get('/quienes_somos', [VistasEstaticasController::class, 'about'])->name('about'); 
Route::get('/auto_ayuda', [VistasEstaticasController::class, 'autohelp'])->name('autohelp');
Route::get('/contactanos', [VistasEstaticasController::class, 'contactus'])->name('contactus');
Route::get('/centros_medicos', [VistasEstaticasController::class, 'mediccenter'])->name('mediccenter');
Route::get('/servicios', [VistasEstaticasController::class, 'services'])->name('services');
Route::get('/especialistas', [VistasEstaticasController::class, 'specialist'])->name('specialist');

// Login y registro manual
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('login');
Route::get('register', [AuthController::class, 'create'])->name('register');
Route::post('register/store', [AuthController::class, 'store'])->name('register.store');

// Login y registro de google
Route::get('login/google', [AuthGoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [AuthGoogleController::class, 'handleGoogleCallback'])->name('google.callback');


// Informacion visible solo para usuarios que iniciaron sesion
Route::group(['middleware' => 'auth'], function () {
    // permite cerrar la sesion no imporda desde donde uno inicio la sesion
    Route::get('/desconectar', [AuthGoogleController::class, 'logout'])->name('logout');
    Route::get('perfil/edit/{id}', [AuthController::class, 'edit'])->name('perfil.edit');


    Route::resource('/admin', AdminHomeController::class);

});
