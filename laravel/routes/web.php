<?php

use App\Http\Controllers\Web\AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\VistasEstaticasController;

//contenido  visible para todo publico
Route::resource('/', HomeController::class);
Route::get('/quienes_somos', [VistasEstaticasController::class, 'about'])->name('about'); 
Route::get('/auto_ayuda', [VistasEstaticasController::class, 'autohelp'])->name('autohelp');


//contenido que debe ser movido a las rutas protegidas
Route::resource('/admin', AdminHomeController::class);


Route::group(['middleware' => 'auth'], function () {
    // // Todas las rutas dentro de este grupo estarán protegidas

    // Route::get('/desconectar', [AuthController::class, 'logout'])->name('logout');
    // Route::get('/inicio', [HomeController::class, 'index'])->name('home.index');
    // Route::resource('cliente', ClienteController::class);

    // Route::resource('reporte-diario', ReporteDiarioController::class);
});
