<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Perfile;

class ClientesController extends Controller
{
    public function profile() {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        $perfil = Perfile::where('cliente_id',$id)->first();
        // dd($cliente,$perfil);
        return view('/cliente/perfil/miPerfil')->with('cliente',$cliente)->with('perfil',$perfil);
    }
    
    // Vista para crear un cliente
    public function create(){
        return view('/login/registrar');
    }
    
    // Proceso para almacenar un cliente
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:25|min:3',
            'apellido' => 'required|string|max:25|min:3 ',
            'correo' => 'required|string|max:50|min:8',
            'contraseña' => 'required|string|max:15|min:8',
            'contraseña2' => 'required|string|max:15|min:8',
            'telefono' => 'nullable|integer|digits:10'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
            //return back()->withErrors($validator->errors())->with('inputs',$request->all());
        } else if($request->contraseña != $request->contraseña2) {
            $datos = [
                'contraseña' => 'Las contraseñas no coinciden',
                'contraseña2' => 'Las contraseñas no coinciden'
            ];
            return back()->withErrors($datos);
        }

        DB::beginTransaction();
        try {
            $cliente = new Cliente();
            $cliente->correo = $request->correo;
            $cliente->contraseña = Hash::make($request->contraseña);
            $cliente->google_id = null;
            $cliente->token_id = null;
            $cliente->estado = 'activo';
            $cliente->save();
            
            $perfil = new Perfile();
            $perfil->cliente_id = $cliente->id;
            $perfil->nombre = $request->nombre;
            $perfil->apellido = $request->apellido;
            $perfil->telefono =$request->telefono;
            $perfil->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e);
            return back()->withErrors([
                'e_mensaje' => 'Ha ocurrido un error inesperado, intenta cambiando lo siguiente',
                'e_correo' => 'Intenta con otro CORREO, puede que ya exista en la base de datos',
                'e_telefono' => 'Intenta con otro TELEFONO, puede que ya exista en la base de datos'
            ]);
        }

        // if($request->hasfile('imagen')){

        //     $img=$request->imagen;
        //     $nuevo='cliente_'.$cliente->id.'.'.$img->extension();
        //     $ruta=$img->storeAs('imagenes/clientes',$nuevo,'public');
        //     $ruta='storage/'.$ruta;
        //     $cliente->imagen=asset($ruta);
        //     $cliente->save();
        // }

        return redirect('/iniciar');
    }
    
    public function edit() {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        $perfil = Perfile::where('cliente_id',$id)->first();
        return view('/cliente/completarPerfil')->with('cliente',$cliente)->with('perfil',$perfil);
    }    
    
    // Proceso para modificar el perfil
    public function update(Request $request){
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        $perfil = Perfile::where('cliente_id',$id)->first();

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:25|min:3',
            'apellido' => 'required|string|max:25|min:3 ',
            'correo' => 'required|string|max:50|min:8',
            'contraseña' => 'required|string|max:15|min:8',
            'contraseña2' => 'required|string|max:15|min:8',
            'telefono' => 'nullable|integer|digits:10'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
            //return back()->withErrors($validator->errors())->with('inputs',$request->all());
        } else if($request->contraseña != $request->contraseña2) {
            $datos = [
                'contraseña' => 'Las contraseñas no coinciden',
                'contraseña2' => 'Las contraseñas no coinciden'
            ];
            return back()->withErrors($datos);
        }

        DB::beginTransaction();
        try {
            $cliente->correo = $request->correo;
            $cliente->contraseña = Hash::make($request->contraseña);
            $cliente->save();
            
            $perfil->nombre = $request->nombre;
            $perfil->apellido = $request->apellido;
            $perfil->telefono =$request->telefono;
            $perfil->foto =$request->imagen;
            $perfil->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e);
            return back()->withErrors([
                'e_mensaje' => 'Ha ocurrido un error inesperado, intenta cambiando lo siguiente',
                'e_correo' => 'Intenta con otro CORREO, puede que ya exista en la base de datos',
                'e_telefono' => 'Intenta con otro TELEFONO, puede que ya exista en la base de datos'
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
