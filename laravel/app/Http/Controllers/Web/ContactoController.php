<?php

namespace App\Http\Controllers\Web;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.contacto.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validación
    $validatedData = $request->validate([
        'nombre' => 'required|string|min:3|max:20',
        'apellido' => 'required|string|min:3|max:20',
        'email' => 'required|email|max:50',
        'mensaje' => 'required|string|min:15|max:1000'
    ]);
    

    // Crear y guardar el contacto
    $contacto = new Contacto();
    $contacto->nombre = $validatedData['nombre'];
    $contacto->apellido = $validatedData['apellido'];
    $contacto->email = $validatedData['email'];
    $contacto->mensaje = $validatedData['mensaje'];
    $contacto->save();

    // Redireccionar con un mensaje de éxito
    return redirect()->back()->with('success', 'Mensaje enviado con éxito. Nos pondremos en contacto contigo a la brevedad.');

}

    
}
