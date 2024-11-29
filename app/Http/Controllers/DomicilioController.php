<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Validator;
use App\Models\Cliente;
use App\Models\Direccione;


class DomicilioController extends Controller
{
    public function showDomicilio(){
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        return View('/cliente/perfil/domicilio')->with('cliente',$cliente);

    }
       

    public function guardar(Request $request){
        $validator = Validator::make($request->all(), [
            'estado' => 'required|string|max:25|min:3',
            'municipio' => 'required|string|max:25|min:3 ',
            'cp' => 'required|integer|digits:5',
            'calle' => 'required|string|max:15|min:8',
            'no_exterior' => 'required|integer|max:15|min:1',
            'no_exterior' => 'nullable|integer|max:15|min:1',
            'referencias' => 'nullable|string|max:100|min:3 ',
        ]);
        $id = session()->get('cliente');
       // $id=1;
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
            //return back()->withErrors($validator->errors())->with('inputs',$request->all());
        } 
        
        $Domicilio = new Direccione();
        $Domicilio->cliente_id = $id;
        $Domicilio->estado =  $request->estado;
        $Domicilio->municipio =  $request->municipio;
        $Domicilio->cp = $request-> cp;
        $Domicilio->calle = $request->calle;
        $Domicilio->no_exterior = $request->numeroExterior;
        $Domicilio->no_interior = $request->numeroInterior;
        $Domicilio->referencias = $request->referencias;
        $Domicilio->estatus = 'activo' ;
        $Domicilio->save();
        return redirect('/domiclio');

    }


    





}
