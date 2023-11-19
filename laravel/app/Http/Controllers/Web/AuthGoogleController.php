<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthGoogleController extends Controller
{
    public function login()
    {
        // si el usuario ya está logueado, lo manda al home
        if (Auth::user()) {
            return redirect()->route('home.index');
        }

        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // se redirige al login de la pagina
        return redirect()->intended('/');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $existingUser = User::where('email', $googleUser->email)->first();
        $isNewUser = false; // Bandera para identificar si el usuario es nuevo

        if (!$existingUser) {
            // Crear un nuevo usuario si no existe
            $newUser = new User();
            $newUser->name = $googleUser->name;
            $newUser->email = $googleUser->email;
            $newUser->google_id = $googleUser->id;

            // Asignar una foto si la longitud de la URL es adecuada
            if (strlen($googleUser->avatar_original) <= 255) {
                $newUser->photo = $googleUser->avatar_original;
            }

            $newUser->email_verified_at = now();
            $newUser->password = Hash::make("default_password"); // Considera cambiar esto por algo más seguro
            $newUser->status = true;

            $newUser->save();
            $userToLogin = $newUser;
            $isNewUser = true; // El usuario es nuevo
        } else {
            $userToLogin = $existingUser;
        }

        // Autenticar al usuario
        Auth::login($userToLogin, true);

        // Comprobar el dominio del correo electrónico
        $emailDomain = substr(strrchr($userToLogin->email, "@"), 1);
        if ($emailDomain == 'mindwell.cl' || $emailDomain == 'mindwell.com') {
            return redirect()->route('admin.index');
        }

        // Verificar si falta alguno de los campos: ciudad, comuna, edad o dirección
        if (empty($userToLogin->ciudad) || empty($userToLogin->comuna) || empty($userToLogin->edad) || empty($userToLogin->direccion)) {
            return redirect()->route('perfil.edit', $userToLogin->id)
                ->with('info', 'Por favor completa tu información de perfil (ciudad, comuna, edad, dirección).');
        }

        // Mensaje de bienvenida personalizado según si el usuario es nuevo o no
        $welcomeMessage = $isNewUser ? 'Bienvenido a la plataforma!' : 'Bienvenido nuevamente a la plataforma!';

        // Redireccionar a la página de inicio con un mensaje personalizado
        return redirect()->route('index')->with('info', $welcomeMessage);
    }
}
