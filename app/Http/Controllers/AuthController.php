<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cliente;
use App\Models\Perfile;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function muestraLogin() {
        return view('/login/login'); 
    }

    public function login(Request $request) {
        // dd($request->all());
        $credentials = $request->validate([
            'correo' => ['required', 'email'],
            'contraseña' => ['required'], 
        ]);
 
        $cliente = Cliente::where('correo', $request->correo)->where('estado', 'activo')->first();
        $request->session()->invalidate();
        //dd($cliente);
        if($cliente && Hash::check($request->contraseña, $cliente->contraseña)) {
            Auth::guard('cliente')->login($cliente);
            $request->session()->regenerate();
            session(['cliente'=>$cliente->id]);
            // session(['clienteImagen'=>$cliente->imagen]);        //podrian ocuparse
            // session(['clienteNombre'=>$cliente->nombre ." " .$cliente->apellido]);       //podrian ocuparse
            // session(['clienteCorreo'=>$cliente->correo]);        //podrian ocuparse

            //return view('/plantilla/molde')->with('cliente',$cliente);
            //dd(session()->get('cliente'));
            return redirect()->intended('/catalogo');
        }
        
        return back()->withErrors([
            'correo' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    // Método de autenticación de Google
    public function updateOrCreate() {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Buscar o crear al cliente
        $cliente = Cliente::updateOrCreate(['google_id' => $googleUser->id], [
            'correo' => $googleUser->email,
            'contraseña' => bcrypt(Str::random(16)), // Contraseña aleatoria encriptada
            'google_id' => $googleUser->attributes['id'],
            'token_id' => $googleUser->token, 
        ]);
        
        $perfil = Perfile::updateOrCreate(['cliente_id' => $cliente->id], [
            // 'cliente_id' => $cliente->id,
            'nombre' => $googleUser->user['given_name'],
            'apellido' => $googleUser->user['family_name'],
            'foto' => $googleUser->avatar,
        ]);

        // Autenticar al cliente y crear sesión
        Auth::guard('cliente')->login($cliente);
        session(['cliente' => $cliente->id]); // Guardar ID del cliente en la sesión
        
        // session(['clienteImagen'=>$googleUser->avatar]);
        // session(['clienteNombre'=>$googleUser->user['given_name'] ." " .$googleUser->user['family_name']]);
        // session(['clienteCorreo'=>$googleUser->email]);

        return redirect()->intended('/catalogo');
    }

    public function logout(Request $request) {
        Auth::guard('cliente')->logout();

        $request->session()->flush();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
