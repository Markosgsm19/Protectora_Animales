<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function mostrarAnimales(){
        $animal = Animal::all();

        return view('animal', ['animales' => $animal]);
    }


    public function deleteAnimales($id){
        try {
            $animal = Animal::find($id);
            $animal->delete();

        }catch (\Exception $exception){

        }


        return redirect()->route('animals.mostrar');
    }


    public function addAnimal(Request $request){

        try {
            $data = $request->except(['_token', '_method']);

            Animal::create($data);

        }catch (\Exception $exception){

        }


        return redirect()->route('animals.mostrar');
    }
}
