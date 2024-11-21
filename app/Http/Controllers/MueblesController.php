<?php

namespace App\Http\Controllers;

use App\Models\muebles;
use Illuminate\Http\Request;

class MueblesController extends Controller
{
    public function crear(Request $request)
    {
       // try {
          
            $mueble = new muebles();
            
            $mueble->nombre = $request->nombre;
            $mueble->meterial = $request->meterial;
            $mueble->email = $request->email;
            $mueble->imagen = 'mueble_default.png'; // Corregido el nombre de la imagen
            $mueble->password = Hash::make($request->contreaseña);
    
            if ($request->hasFile('imagen1')) {
                $img = $request->file('imagen1');
                $nuevo = 'mueble_1_' . $mueble->id . '.' . $img->extension();
                $ruta = $img->storeAs('admin/muebles', $nuevo, 'public');
                $ruta = 'storage/' . $ruta;
                $mueble->imagen = asset($ruta);
            }
    
            $mueble->save();
        //    Auth::login($admin);
            return redirect('/mueble/form');
     //   } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'Ocurrió un error: ' . $e->getMessage(),
            ])->withInput();
        }
    }
    






}
