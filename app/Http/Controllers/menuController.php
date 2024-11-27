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
    return view('/cliente/catalogo') -> with('muebles',$muebles);

    }





}
