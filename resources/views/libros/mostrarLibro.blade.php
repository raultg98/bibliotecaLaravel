<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800">
            {{ $libro->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[1200px] mx-auto">
            <div class="bg-white p-6">

                <p><strong>Autor:</strong> {{ $libro->autor }}</p>
                <p><strong>Género:</strong> {{ $libro->genero }}</p>
                <p><strong>Editorial:</strong> {{ $libro->editorial }}</p>
                <p><strong>Páginas:</strong> {{ $libro->paginas }}</p>
                <p><strong>Año:</strong> {{ $libro->anio }}</p>
                <p><strong>Precio:</strong> {{ $libro->precio }}€</p>

                <div class="flex gap-2 mt-4">
                    <a href="/libros/{{ $libro->id }}/valorar" class="bg-blue-600 text-white px-4 py-2 rounded">
                        Añadir valoración
                    </a>
                    <a href="/libros" class="bg-gray-600 text-white px-4 py-2 rounded">
                        Volver a la lista
                    </a>
                </div>

                <h3 class="text-lg font-semibold mt-6 mb-2">Valoraciones</h3>

                @if ($valoraciones->isEmpty())
                    <p>No hay valoraciones todavía.</p>
                @else
                    <ul class="space-y-4">
                        @foreach ($valoraciones as $valoracion)
                            <li class="border p-4 rounded">
                                <p><strong>Puntuación:</strong> {{ $valoracion->puntuacion }}/5</p>
                                <p>{{ $valoracion->comentario }}</p>
                                <a href="/libros/{{ $libro->id }}/valoraciones/{{ $valoracion->id }}" class="bg-gray-600 text-white px-3 py-1 rounded text-sm inline-block mt-2">
                                    Ver detalle
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>