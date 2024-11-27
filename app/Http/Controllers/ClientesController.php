<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function profile($id) {
        $cliente = Cliente::find($id);
        return view('/clientes/perfil')->with('cliente',$cliente);
    }
    
    // Vista para crear un cliente
    public function create(){
        return view('/login/registrar');
    }
    
    // Proceso para almacenar un cliente
    public function store(Request $request){
        try {
            $cliente = new Cliente();
            $cliente->correo = $request->correo;
            $cliente->contraseña = Hash::make($request  ->contraseña);
            $cliente->google_id = null;
            $cliente->token_id = null;
            $cliente->estado = 'activo';
            $cliente->save();
            
            $perfil = new Perfile();
            $perfil->nombre = $request->nombre;
            $perfil->apellido = $request->apellido;
            $perfil->imagen ='clientes_default.jpg';
            $perfil->save();

        } catch (\Exception $e) {
            return back()->withErrors([
                'mensaje' => 'Ha ocurrido un error inesperado, intenta cambiando lo siguiente',
                'correo' => 'Intenta con otro CORREO, puede que ya exista en la base de datos',
                'telefono' => 'Intenta con otro TELEFONO, puede que ya exista en la base de datos'
            ]);
        }

        if($request->hasfile('imagen')){

            $img=$request->imagen;
            $nuevo='cliente_'.$cliente->id.'.'.$img->extension();
            $ruta=$img->storeAs('imagenes/clientes',$nuevo,'public');
            $ruta='storage/'.$ruta;
            $cliente->imagen=asset($ruta);
            $cliente->save();
        }

        return redirect('/iniciar');
    }

    public function edit() {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        return view('/clientes/editar')->with('cliente',$cliente);
    }    

    public function show() {
        $id = session()->get('cliente');
        $cliente=cliente::find($id);
        return view('/clientes/mostrar')->with('cliente',$cliente);
    }

    
    public function destroy() {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);

        $cliente->estado = 'inactivo'; //puede quitar esto de la edicion

        session()->flush();
        session()->invalidate();
        
        $cliente->save();

        return redirect('/');

    }
}
