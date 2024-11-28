<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\muebles;
use App\Models\categorias;
use App\Models\Mueble;
use Illuminate\Http\Request;
//se agregue este comentario para hacer la prueba
class MueblesController extends Controller
{
  public function showMuebles()
  {
    $muebles = Mueble::all();
    return view('/admin/muebles')->with('muebles', $muebles);
  }

  public function crear(Request $request)
  {
    try {
      //  dd($request);
      $mueble = new Mueble();
      $mueble->categoria_id = $request->id_catalogo;
      $mueble->nombre = $request->nombre;
      $mueble->precio = $request->precio;
      $mueble->color = $request->color;
      $mueble->meterial = $request->meterial;
      $mueble->descripcion = $request->descripcion;
       // Corregido el nombre de la imagen
      $mueble->stock = $request->stock;
      
      $mueble->imagen_url = $request->hasFile('imagen1');
      if ($request->hasFile('imagen1')) {
        $img = $request->file('imagen1');
        $nuevo = 'mueble_1_' . $mueble->id . '.' . $img->extension();
        $ruta = $img->storeAs('Muebles/admin', $nuevo, 'public');
        $ruta = 'storage/' . $ruta;
       // dd($ruta);
        $mueble->imagen = asset($ruta);
        $mueble->save();
      }

      $mueble->save();
      //    Auth::login($admin);
      return redirect('/Agregar/Muebles');
   } catch (\Exception $e) {
      return back()->withErrors([
        'error' => 'Ocurrió un error: ' . $e->getMessage(),
      ])->withInput();
    }
  }
  public function editar($id)
  {
    //  try {
    $muebles = Mueble::findOrFail($id);
    $categorias = Categoria::all();
    return view('/admin/editarMuebles')->with('muebles', $muebles)->with('categorias', $categorias);

    // } catch (\Exception $e) {
    return back()->withErrors([
      'error' => 'Ocurrió un error: ' . $e->getMessage(),
    ]);
    // }
  }
  public function update(Request $request, $id)
  {
    //dd($request ->all());
    try {
      $mueble = Mueble::all();
      $mueble = Mueble::find($id);
      $mueble->categoria_id = $request->id_catalogo;
      $mueble->nombre = $request->nombre;
      $mueble->precio = $request->precio;
      $mueble->meterial = $request->meterial;
      $mueble->descripcion = $request->descripcion;




      if ($request->hasFile('imagen1')) {
        $img = $request->file('imagen1');
        $nuevo = 'mueble_1_' . $mueble->id . '.' . $img->extension();
        $ruta = $img->storeAs('admin/muebles', $nuevo, 'public');
        $ruta = 'storage/' . $ruta;
        $mueble->imagen = asset($ruta);
      }
    } catch (\Exception $e) {
      return back()->withErrors([
        'error' => 'Ocurrió un error: ' . $e->getMessage(),
      ])->withInput();
    }

    $mueble->save();
    return redirect('/Admin/Muebles');
  }
  public function eliminar($id)
  {
    //dd($request ->all());
    try{

    $mueble = Mueble::find($id);
    $mueble->delete();
    return redirect('/Admin/Muebles');
  }catch (\Exception $e) {
    return back()->withErrors([
      'error' => 'Ocurrió un error: ' . $e->getMessage(),
    ])->withInput();
  }
  }
}
