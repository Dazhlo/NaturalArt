<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
class CategoriasContoller extends Controller
{
    public function show(){
        $categorias =categorias::all();
        return view('/admin/agregarMuebles')-> with('categorias',$categorias);


  }
}
