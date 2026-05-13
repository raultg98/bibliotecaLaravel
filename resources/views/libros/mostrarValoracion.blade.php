<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800">
            Detalle de valoración
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[1200px] mx-auto">
            <div class="bg-white p-6">

                <p><strong>Libro:</strong> {{ $valoracion->libro->titulo }}</p>
                <p><strong>Usuario:</strong> {{ $valoracion->user->name }}</p>
                <p><strong>Puntuación:</strong> {{ $valoracion->puntuacion }}/5</p>
                <p><strong>Comentario:</strong> {{ $valoracion->comentario }}</p>
                <p><strong>Fecha:</strong> {{ $valoracion->created_at->format('d/m/Y') }}</p>

                <div class="mt-4">
                    <a href="/libros/{{ $valoracion->libro_id }}" class="bg-gray-600 text-white px-4 py-2 rounded">
                        Volver al libro
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>