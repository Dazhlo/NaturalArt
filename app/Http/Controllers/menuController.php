<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muebles;

class menuController extends Controller
{
    

    public function showMenu(){
    //  if(empty($muebles)){
    //  }
$muebles=muebles::all();
    return view('/cliente/catalogo') -> with('muebles',$muebles);

    }





}
