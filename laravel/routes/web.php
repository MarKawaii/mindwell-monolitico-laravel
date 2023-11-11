<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AdminHomeController;
use App\Http\Controllers\Web\VistasEstaticasController;

//contenido  visible para todo publico
Route::resource('/', HomeController::class);

// Vistas estaticas
Route::get('/quienes_somos', [VistasEstaticasController::class, 'about'])->name('about'); 
Route::get('/auto_ayuda', [VistasEstaticasController::class, 'autohelp'])->name('autohelp');

// Login y registro sso
Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

// Informacion visible solo para usuarios que iniciaron sesion
Route::group(['middleware' => 'auth'], function () {
    Route::get('/desconectar', [AuthController::class, 'logout'])->name('logout');

    Route::resource('/admin', AdminHomeController::class);

});
