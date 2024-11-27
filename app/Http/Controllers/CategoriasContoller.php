<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriasContoller extends Controller
{
    public function show(){
        $categorias =Categoria::all();
        return view('/admin/agregarMuebles')-> with('categorias',$categorias);


  }
}
