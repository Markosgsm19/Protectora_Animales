<?php

namespace App\Http\Controllers;

use App\Models\Adopcion;
use Illuminate\Http\Request;

class AdopcionController extends Controller
{
    public function mostrarAdopciones(){
        $adopcion = Adopcion::all();

        return view('adopcion', ['adopciones' => $adopcion]);
    }


    public function deleteAdopcion($id){
        $adopcion = Adopcion::find($id);
        $adopcion->delete();

        return redirect()->route('adopcion.mostrar');
    }


    public function addAdopcion(Request $request){

        $data = $request->except(['_token', '_method']);

        Adopcion::create($data);

        return redirect()->route('adopcion.mostrar');
    }
}
