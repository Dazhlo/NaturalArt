<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mueble;

class menuController extends Controller
{
    public function showMenu(){
    //  if(empty($muebles)){
    //  }
    $muebles=Mueble::all();
    return view('/muebles/catalogo') -> with('muebles',$muebles);

    }
    
    public function showMueble($id) {
        $mueble = Mueble::find($id);
        return view('/cliente/detallesMenu')->with('mueble',$mueble)->with('mensaje','');
    }
}
