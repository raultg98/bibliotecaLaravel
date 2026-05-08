<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model{
    protected $table = 'valoraciones';

    protected $fillable = [
        'libro_id', 
        'user_id', 
        'comentario', 
        'puntuacion'
    ];

    public function libro(){
        return $this -> belongsTo(Libro::class);
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }
}