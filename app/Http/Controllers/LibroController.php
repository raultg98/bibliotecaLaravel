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

    // Formulario crear libro
    public function crear()
    {
        return view('libros.crearLibro');
    }

    // Almacenar libro
    public function almacenar(Request $request)
    {
        $request->validate([
            'titulo'=> 'required|min:3',
            'autor' => 'required|min:3',
            'genero' => 'required',
            'editorial' => 'required',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
        ]);

        Libro::create($request->all());

        return redirect('/libros');
    }

    // Formulario editar libro
    public function editar($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.editarLibro', ['libro' => $libro]);
    }

    // Modificar libro
    public function modificar(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'autor' => 'required|min:3',
            'genero' => 'required',
            'editorial' => 'required',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1000|max:2025',
            'precio' => 'required|numeric|min:0',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($request->all());

        return redirect('/libros/' . $id);
    }

    // Borrar libro
    public function borrar($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect('/libros');
    }
} 