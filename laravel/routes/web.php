<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;


Route::resource('/', HomeController::class);

Route::group(['middleware' => 'auth'], function () {
    // // Todas las rutas dentro de este grupo estarán protegidas

    // Route::get('/desconectar', [AuthController::class, 'logout'])->name('logout');
    // Route::get('/inicio', [HomeController::class, 'index'])->name('home.index');
    // Route::resource('cliente', ClienteController::class);

    // Route::resource('reporte-diario', ReporteDiarioController::class);
});
