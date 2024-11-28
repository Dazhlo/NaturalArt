<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Spatie\FlareClient\View;

class DomicilioController extends Controller
{
    public function showDomicilio(){
        $id = session()->get('cliente');
        $cliente = Cliente::find($id);
        return View('/cliente/perfil/domicilio')->with('cliente',$cliente);

    }
       

    public function guardar(){
         
  

    }


    





}
