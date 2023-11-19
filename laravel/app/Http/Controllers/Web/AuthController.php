<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirecciona a la vista de inicio de sesión después de una autenticación exitosa
            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function create()
    {
        return view('client.auth.register');
    }


    public function store(Request $request)
    {
        // Lista de dominios permitidos
        $dominiosPermitidos = [
            'gmail.com', 'gmail.cl', 'outlok.com', 'hotmail.cl',
            'hotmail.com', 'hotmail.es', 'live.cl', 'live.com'
        ];

        // Reglas de validación
        $reglas = [
            'nombre' => 'required|max:255',
            'run' => 'required|max:12|unique:users',
            'celular' => 'required|max:9',
            'telefono' => 'nullable|max:9',
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users',
                function ($attribute, $value, $fail) use ($dominiosPermitidos) {
                    $dominioEmail = substr(strrchr($value, "@"), 1);
                    if (!in_array($dominioEmail, $dominiosPermitidos)) {
                        $fail('El dominio del correo electrónico no es válido.');
                    }
                },
            ],
            'contrasena' => 'required|min:6|max:20',
            'repetir_contrasena' => 'required|same:contrasena'
        ];

        // Mensajes de error personalizados en español
        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no puede tener más de :max caracteres.',
            'unique' => 'El :attribute ya ha sido registrado.',
            'email.email' => 'El campo :attribute debe ser una dirección de correo válida.',
            'contrasena.min' => 'La contraseña debe tener al menos :min caracteres.',
            'repetir_contrasena.same' => 'Las contraseñas no coinciden.',
        ];

        // Validar los datos
        $validatedData = Validator::make($request->all(), $reglas, $mensajes)->validate();

        // Crear el usuario
        $usuario = new User;
        $usuario->name = $validatedData['nombre'];
        $usuario->run = $validatedData['run'];
        $usuario->celular = $validatedData['celular'];
        $usuario->telefono = $validatedData['telefono'] ?? null;
        $usuario->email = $validatedData['email'];
        $usuario->password = bcrypt($validatedData['contrasena']);
        $usuario->status = 1;

        $usuario->save();

        return redirect()->route('index')->with('success', 'Cuenta creada con éxito');
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        return view('client.auth.edit', compact('user'));
    }
   
}
