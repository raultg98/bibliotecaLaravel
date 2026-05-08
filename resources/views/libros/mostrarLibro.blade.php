<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800">
            {{ $libro -> titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[1200px] mx-auto">
            <div class="bg-white  p-6">

                <p><strong>Autor:</strong> {{ $libro->autor }}</p>
                <p><strong>Género:</strong> {{ $libro->genero }}</p>
                <p><strong>Editorial:</strong> {{ $libro->editorial }}</p>
                <p><strong>Páginas:</strong> {{ $libro->paginas }}</p>
                <p><strong>Año:</strong> {{ $libro->anio }}</p>
                <p><strong>Precio:</strong> {{ $libro->precio }}€</p>

                <a href="/libros/{{ $libro->id }}/valorar" class="text-blue-600 underline">
                    Añadir valoración
                </a>

                <h3>Valoraciones</h3>

                @if ($valoraciones->isEmpty())
                    <p>No hay valoraciones todavía.</p>
                @else
                    <ul class="space-y-4">
                        @foreach ($valoraciones as $valoracion)
                            <li class="border p-4 rounded">
                                <p><strong>Puntuación:</strong> {{ $valoracion->puntuacion }}/5</p>
                                <p>{{ $valoracion->comentario }}</p>
                                <a href="/libros/{{ $libro->id }}/valoraciones/{{ $valoracion->id }}" class="text-blue-600 underline">
                                    Ver detalle
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <a href="/libros" class="text-blue-600 underline">Volver a la lista</a>

            </div>
        </div>
    </div>
</x-app-layout>