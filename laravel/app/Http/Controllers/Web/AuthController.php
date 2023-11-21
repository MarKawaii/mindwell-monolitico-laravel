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

            // Obtener el usuario autenticado
            $user = Auth::user();

            // Comprobar el dominio del correo electrónico
            $emailDomain = substr(strrchr($user->email, "@"), 1);
            if ($emailDomain == 'mindwell.cl' || $emailDomain == 'mindwell.com') {
                // Redirigir a la ruta de administración con un mensaje
                return redirect()->route('admin.index')->with('info', 'Bienvenido al panel de administración.');
            }

            // Verificar si falta alguno de los campos: ciudad, comuna, edad o dirección
            if (empty($user->ciudad) || empty($user->comuna) || empty($user->edad) || empty($user->direccion)) {
                // Redirigir a la vista de edición de perfil con un mensaje
                return redirect()->route('perfil.edit', $user->id)
                    ->with('info', 'Por favor completa tu información de perfil.');
            }

            // Redirecciona a la vista de inicio con un mensaje de bienvenida
            return redirect()->route('index')->with('info', 'Bienvenido nuevamente a la plataforma!');
        }

        // En caso de credenciales incorrectas, regresar con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->with('error', 'Error en el inicio de sesión, por favor verifica tus credenciales.');
    }




    public function create()
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Redirigir al usuario a la página de inicio o a alguna otra página
            return redirect()->route('index')->with('info', 'Ya estás registrado y autenticado.');
        }

        return view('client.auth.register');
    }


    public function store(Request $request)
    {
        if (Auth::check()) {
            // Redirigir al usuario a la página de inicio o a alguna otra página
            return redirect()->route('index')->with('info', 'Ya estás registrado y autenticado.');
        }

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
        $authUser = Auth::user();
        // Verifica si el ID del usuario autenticado coincide con el ID pasado
        if ($authUser->id != $id) {
            return redirect()->route('index')->with('error', 'No tiene permiso para editar este perfil.');
        }

        $user = User::find($id);
        return view('client.auth.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $authUser = Auth::user();
        // Verifica si el ID del usuario autenticado coincide con el ID pasado
        if ($authUser->id != $id) {
            return redirect()->route('index')->with('error', 'No tiene permiso para editar este perfil.');
        }

        // Validación de datos
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required',
            'ciudad' => 'required',
            'comuna' => 'required',
            'run' => 'required|min:9|max:12', // Ajusta según tus necesidades
            'fecha_nacimiento' => 'required|date', // Asegúrate de que sea una fecha válida
            'genero' => 'required', // Asegúrate de que se haya seleccionado un género
            'estadoCivil' => 'required', // Asegúrate de que se haya seleccionado un estado civil
            'celular' => 'required|digits:8', // Ejemplo: formato de celular chileno
            'telefono' => 'nullable|digits:8' // Opcional y con formato de teléfono
        ]);

        try {
            // Buscar el usuario por ID y actualizar
            $user = User::findOrFail($id);
            $user->name = $validatedData['nombre'];
            $user->direccion = $validatedData['direccion'];
            $user->ciudad = $validatedData['ciudad'];
            $user->comuna = $validatedData['comuna'];
            $user->run = $validatedData['run'];
            $user->fecha_nacimiento = $validatedData['fecha_nacimiento']; // Asegúrate de que tu modelo soporte este campo
            $user->genero = $validatedData['genero']; // Asegúrate de que tu modelo soporte este campo
            $user->estado_civil = $validatedData['estadoCivil']; // Asegúrate de que tu modelo soporte este campo
            $user->celular = $validatedData['celular'];
            $user->telefono = $validatedData['telefono'];
            $user->save();
    
            // Redirigir a alguna ruta con un mensaje de éxito
            return redirect()->route('perfil.edit', $id)->with('success', 'Datos actualizados correctamente.');
        } catch (\Exception $e) {
            // Manejar la excepción, como un error al encontrar el usuario o al guardar los datos
            return redirect()->back()->with('error', 'Error al actualizar los datos: ' . $e->getMessage());
        }
    }
}
