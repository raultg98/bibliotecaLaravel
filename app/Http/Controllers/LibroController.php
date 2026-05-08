<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Valoracion;
use Illuminate\Http\Request;

class LibroController extends Controller{
    
    // Listar todos los libros
    public function index(){
        $libros = Libro::all();

        return view('libros.mostrarLibros', ['libros' => $libros]);
    }

    // Ver detalles de un libro con sus valoraciones
    public function show($id){

        $libro = Libro::findOrFail($id);
        $valoraciones = Valoracion::where('libro_id', $id) -> get();

        return view('libros.mostrarLibro', ['libro' => $libro, 'valoraciones' => $valoraciones]);
    }

    // Formulario crear valoracion
    public function crearValoracion($id){
        $libro = Libro::findOrFail($id);

        return view('libros.valoracion_crear', ['libro' => $libro]);
    }

    // Guardar valoracion
    public function almacenarValoracion(Request $request, $id){
        $request -> validate([
            'comentario' => 'required|min:5', 
            'puntuacion' => 'required|integer|min:1|max:5'
        ]);

        Valoracion::create([
            'libro_id' => $id, 
            'user_id' => auth() -> id(), 
            'comentario' => $request -> comentario, 
            'puntuacion' => $request -> puntuacion
        ]);

        return redirect('/libros/' . $id);
    }

    // Mostrar Valoracion
    public function mostrarValoracion($libro_id, $id){
        $valoracion = Valoracion::findOrFail($id);

        return view('libros.mostrarValoracion', ['valoracion' => $valoracion]);
    }
} 