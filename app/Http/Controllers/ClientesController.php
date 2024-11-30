<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Perfile;
use App\Models\Direccione;

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
    public function store(Request $request) {
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
                'e_correo' => 'Intenta con otro CORREO, puede que ya exista en nuestros registros',
                'e_telefono' => 'Intenta con otro TELEFONO, puede que ya exista en nuestros registros'
            ]);
        }

        return redirect('/iniciar');
    }
    
    public function edit() {
        $id = session()->get('cliente');
        $perfil = Perfile::where('cliente_id',$id)->first();
        return view('/cliente/completarPerfil')->with('perfil',$perfil)->with('mensaje','');
    }    
    
    public function edit2() {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        return view('/cliente/editarCredenciales')->with('cliente',$cliente)->with('mensaje','');
    }    
    
    // Proceso para modificar el perfil
    public function updateData(Request $request) {
        $id = session()->get('cliente');
        $perfil = Perfile::where('cliente_id',$id)->first();

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:25|min:3',
            'apellido' => 'required|string|max:25|min:3',
            'imagen' => 'nullable|image|max:5120',
            'telefono' => 'nullable|integer|digits:10'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        DB::beginTransaction();
        try {
            $perfil->nombre = $request->nombre;
            $perfil->apellido = $request->apellido;
            $perfil->foto = $request->imagen;
            $perfil->telefono = $request->telefono;
            $perfil->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return back()->withErrors([
                'e_mensaje' => 'Ha ocurrido un error inesperado, intenta cambiando lo siguiente',
                'e_telefono' => 'Intenta con otro TELEFONO, puede que ya exista en nuestros registros'
            ]);
        }

        if($request->hasfile('imagen')) {

            $img=$request->imagen;
            $nuevo='cliente_'.$perfil->id.'.'.$img->extension();
            $ruta=$img->storeAs('imagenes/clientes',$nuevo,'public');
            $ruta='storage/'.$ruta;
            $perfil->foto = asset($ruta);
            $perfil->save();
        }

        return view('/cliente/completarPerfil')->with('perfil',$perfil)->with('mensaje','Se actualizaron los datos correctamente');
    }
    
    // Proceso para modificar el perfil
    public function updateCredentials(Request $request) {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);

        $validator = Validator::make($request->all(), [
            'correo' => 'required|string|max:50|min:8',
            'contraseña' => 'required|string|max:15|min:8',
            'contraseña2' => 'required|string|max:15|min:8'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
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

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e);
            return back()->withErrors([
                'e_mensaje' => 'Ha ocurrido un error inesperado, intenta cambiando lo siguiente',
                'e_correo' => 'Intenta con otro CORREO, puede que ya exista en nuestros registros'
            ]);
        }

        return view('/cliente/editarCredenciales')->with('cliente',$cliente)->with('mensaje','Las credenciales se cambiaron exitosamente');
    }

    public function show() {
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        $perfil = Perfile::where('cliente_id',$id)->first();
        return view('/cliente/perfil/eliminarPerfil')->with('cliente',$cliente)->with('perfil',$perfil);
    }

    
    public function destroy() {
        $id = session()->get('cliente');
        
        $perfil = Perfile::where('cliente_id',$id)->first();
        $perfil->estado = 'inactivo';
        $perfil->save();
        
        try{
            $direccion = Direccione::where('cliente_id',$id)->firstOrFail();
            $direccion->estatus = 'inactivo';
            $direccion->save();
        } catch(\Exception $e) {
            // dd($e);
            // Aqui no pasa nada, el usuario no tiene una dirección
        }

        $cliente = Cliente::find($id);
        $cliente->estado = 'inactivo';

        session()->flush();
        session()->invalidate();
        
        $cliente->save();

        return redirect('/');
    }
}
