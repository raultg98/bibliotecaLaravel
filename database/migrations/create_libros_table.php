<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void {

        Schema::create('libros', function(Blueprint $table){

            $table -> id();
            $table -> string('titulo');
            $table -> string('autor');
            $table -> string('genero');
            $table -> string('editorial');
            $table -> integer('paginas');
            $table -> integer('anio');
            $table -> decimal('precio', 8, 2);
            $table -> timestamps();

        });
    }

};