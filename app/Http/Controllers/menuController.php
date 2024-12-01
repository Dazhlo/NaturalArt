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
    
    public function showSalasSofas() {
        $muebles = Mueble::where('categoria_id',1)->get();
        return view('/muebles/catalogo')->with('muebles',$muebles);
    }
    
    public function showEscritorios() {
        $muebles = Mueble::where('categoria_id',2)->get();
        return view('/muebles/catalogo')->with('muebles',$muebles);
    }
    
    public function showComedores() {
        $muebles = Mueble::where('categoria_id',3)->get();
        return view('/muebles/catalogo')->with('muebles',$muebles);
    }
    
    public function showRecamaras() {
        $muebles = Mueble::where('categoria_id',4)->get();
        return view('/muebles/catalogo')->with('muebles',$muebles);
    }
}
