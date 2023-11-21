<?php

namespace App\Http\Controllers\Web;

use App\Models\Subscripcion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscripcionController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|unique:subscripcions,email', 
        ]);


        // Crear un nuevo registro en la tabla
        $subscripcion =  new Subscripcion();
        $subscripcion->nombre = $request->nombre;
        $subscripcion->email = $request->email;
        $subscripcion->save();

        // Redirigir al usuario de vuelta a la página anterior
        return back()->with('success', 'Gracias por inscribirte al boletín informativo');
    }
}
