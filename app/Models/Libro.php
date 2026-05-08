<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model{
    protected $fillable = [
        'titulo', 
        'autor', 
        'genero', 
        'editorial', 
        'paginas', 
        'anio', 
        'precio'
    ];

    public function valoraciones(){
        return $this -> hasMany(valoraciones::class);
    }
}