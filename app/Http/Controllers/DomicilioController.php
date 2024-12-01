<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\FlareClient\View;
// use App\Models\Cliente;
use App\Models\Direccione;


class DomicilioController extends Controller
{
    public function showDomicilio() {
        $id = session()->get('cliente');
        try {
            // $cliente = Direccione::findOrFail($id);
            $cliente = Direccione::where('cliente_id',$id)->firstOrFail();
        } catch (\Exception $e) {
            return View('/cliente/perfil/domicilio')->withErrors([
                'error' => 'No tienes direcciones guardadas'
            ]);
            // return View('/cliente/perfil/domicilio')->with('mensaje','ahahahahahah');
        }
        // dd('llego');
        return View('/cliente/perfil/domicilio')->with('cliente',$cliente);
    }

    public function guardar(Request $request) {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'estado' => 'required|string|max:30|min:5',
            'municipio' => 'required|string|max:30|min:5',
            'cp' => 'required|integer|digits:5',
            'colonia' => 'required|string|max:30|min:8',
            'calle' => 'required|string|max:30|min:8',
            'no_exterior' => 'required|integer|max_digits:5',
            'no_exterior' => 'nullable|integer|max_digits:3',
            'referencias' => 'nullable|string|max:50|min:10',
        ]);

        if($validator->fails()) {
            dd('fallo',$validator->errors());
            return back()->withErrors($validator->errors());
        }
        
        $id = session()->get('cliente');
        // dd($id);
        try {
            $Domicilio = new Direccione();
            $Domicilio->cliente_id = $id;
            $Domicilio->estado =  $request->estado;
            $Domicilio->municipio =  $request->municipio;
            $Domicilio->cp = $request-> cp;
            $Domicilio->colonia = $request->colonia;
            $Domicilio->calle = $request->calle;
            $Domicilio->no_exterior = $request->noExt;
            $Domicilio->no_interior = $request->noInt;
            $Domicilio->referencias = $request->referencias;
            $Domicilio->estatus = 'activo' ;
            $Domicilio->save();
        } catch (\Exception $e) {
            dd($e);
            return View('/cliente/perfil/domicilio')->withErrors([
                'error' => 'Ocurrio un error inesperado'
            ]);
        }

        return redirect('/domicilio');
    }

    public function editDomicilio() {
        $id = session()->get('cliente');
        try {
            // $cliente = Direccione::findOrFail($id);
            $cliente = Direccione::where('cliente_id',$id)->firstOrFail();
        } catch (\Exception $e) {
            return View('/cliente/perfil/domicilio')->withErrors([
                'error' => 'No tienes direcciones guardadas'
            ]);
        }
        // dd('llego');
        return View('/cliente/perfil/domicilioEditar')->with('cliente',$cliente);
    }
    
    public function actualizar(Request $request) {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'estado' => 'required|string|max:30|min:5',
            'municipio' => 'required|string|max:30|min:5',
            'cp' => 'required|integer|digits:5',
            'colonia' => 'required|string|max:30|min:8',
            'calle' => 'required|string|max:30|min:8',
            'no_exterior' => 'required|integer|max_digits:5',
            'no_exterior' => 'nullable|integer|max_digits:3',
            'referencias' => 'nullable|string|max:50|min:10',
        ]);

        if($validator->fails()) {
            // dd('fallo',$validator->errors());
            return back()->withErrors($validator->errors());
        }
        
        $id = session()->get('cliente');
        // dd($id);
        try {
            $Domicilio = Direccione::where('cliente_id',$id)->first();
            $Domicilio->cliente_id = $id;
            $Domicilio->estado =  $request->estado;
            $Domicilio->municipio =  $request->municipio;
            $Domicilio->cp = $request-> cp;
            $Domicilio->colonia = $request->colonia;
            $Domicilio->calle = $request->calle;
            $Domicilio->no_exterior = $request->noExt;
            $Domicilio->no_interior = $request->noInt;
            $Domicilio->referencias = $request->referencias;
            $Domicilio->estatus = 'activo' ;
            $Domicilio->save();
        } catch (\Exception $e) {
            dd($e);
            return View('/cliente/perfil/domicilio')->withErrors([
                'error' => 'Ocurrio un error inesperado'
            ]);
        }

        return redirect('/domicilio');
    }
}
