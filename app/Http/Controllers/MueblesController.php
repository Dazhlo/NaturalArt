<?php

namespace App\Http\Controllers;

use App\Models\muebles;

use Illuminate\Http\Request;

class MueblesController extends Controller
{

    
    public function crear(Request $request)
    {
        try {
          //  dd($request);
            $mueble = new muebles();
            $mueble->categoria_id = $request->id_catalogo;
            $mueble->nombre = $request->nombre;
            $mueble->precio = $request->precio;
            $mueble->meterial = $request->meterial  ;
            $mueble->descripcion = $request->descripcion;
            $mueble->imagen_url = 'mueble_default.png'; // Corregido el nombre de la imagen
    
            if ($request->hasFile('imagen1')) {
                $img = $request->file('imagen1');
                $nuevo = 'mueble_1_' . $mueble->id . '.' . $img->extension();
                $ruta = $img->storeAs('admin/muebles', $nuevo, 'public');
                $ruta = 'storage/' . $ruta;
                $mueble->imagen = asset($ruta);
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
    

}





