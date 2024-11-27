<?php

namespace App\Http\Controllers;

use App\Models\Mueble;

use Illuminate\Http\Request;
//se agregue este comentario para hacer la prueba
class MueblesController extends Controller
{

    
    public function crear(Request $request)
    {
<<<<<<< HEAD
        try {
          //  dd($request);
=======
        //try {
          
>>>>>>> 57c38625d037f3d5936c6047b53de3656c87edaa
            $mueble = new Mueble();
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
<<<<<<< HEAD
        //    Auth::login($admin);
            return redirect('/Agregar/Muebles');
       } catch (\Exception $e) {
=======
        //Auth::login($admin);
            return redirect('/mueble/form');
        //} catch (\Exception $e) {
>>>>>>> 57c38625d037f3d5936c6047b53de3656c87edaa
            return back()->withErrors([
                'error' => 'Ocurrió un error: ' . $e->getMessage(),
        ])->withInput();
    }
<<<<<<< HEAD
    

=======
>>>>>>> 57c38625d037f3d5936c6047b53de3656c87edaa
}





