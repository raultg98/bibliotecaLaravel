<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;

use Illuminate\Http\Request;
//Crear esto con el comando de abajo
//./vendor/bin/sail artisan make:controller UserController
class UserController extends Controller
{
    
    public function usuarios() {
        
        $usuarios = User::all();
        
        return view('usuarios.index', [ "usuarios" => $usuarios ]);
    }

    public function buscar($id){
        
        $usuario = User::find($id);
        
        return view('usuarios.show', ["usuario" => $usuario]);
    }

    public function buscarEditar ($id){
        
        $usuario = User::findOrFail($id);
        
        return view('usuarios.editar', ["usuario" => $usuario]);
    }

    public function borrar($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect("/usuarios");
    }

    public function modificar (UpdateRequest $request, $id){
        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->email = $request->email;

        if ($request->password) {
            $usuario->password = bcrypt($request->password);
        }

        $usuario->save();

        return redirect('/usuarios/'.$id);
    }
}