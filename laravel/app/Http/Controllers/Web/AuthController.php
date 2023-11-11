<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
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

        if (!$existingUser) {
            $newUser = new User();
            // Inicio datos basicos de usuario
            $newUser->name = $googleUser->name;
            $newUser->email = $googleUser->email;
            $newUser->google_id = $googleUser->id;
            // fin datos basicos del usuario

            // Validamos la longitud de la URL de la foto.
            if (strlen($googleUser->avatar_original) <= 255) { // Asumiendo que el límite es 255.
                $newUser->photo = $googleUser->avatar_original;
            } else {
                $newUser->photo = null; // Si es demasiado larga, asignamos null.
            }

            $newUser->email_verified_at = now();
            // se crea un contraseña por defecto encriptada
            $newUser->password = Hash::make("asdasdasdasd");
            $newUser->status = true; // despues todos se crean en 0s
            
            $newUser->save();

            Auth::login($newUser, true);
            return redirect()->route('index');
        }

        Auth::login($existingUser, true);
        return redirect()->route('index'); // Corregí un pequeño typo aquí también.
    }
}
