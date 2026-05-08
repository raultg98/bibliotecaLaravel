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

                <a href="/libros/{{ $valoracion->libro_id }}" class="text-blue-600 underline">
                    Volver al libro
                </a>

            </div>
        </div>
    </div>
</x-app-layout>