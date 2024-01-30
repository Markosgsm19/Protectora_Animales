<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function mostrarUsuarios(){
        $usuarios = Usuario::all();

        return view('usuario', ['usuarios' => $usuarios]);
    }


    public function deleteUsuarios($id){
        try {
            $user = Usuario::find($id);

            $user->delete();
        }catch (\Exception $exception){

        }


        return redirect()->route('users.mostrar');
    }


    public function addUsuario(Request $request){
        try {
            $data = $request->except(['_token', 'updated_at', 'created_at', '_method']);
            Usuario::create($data);
            $request->all();

        }catch (\Exception $exception){

        }


        return redirect()->route('users.mostrar');
    }



}
