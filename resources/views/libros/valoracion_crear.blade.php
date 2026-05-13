<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800">
            Valorar: {{ $libro->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[1200px] mx-auto">
            <div class="bg-white p-6">

                @if ($errors->any())
                    <ul class="mb-4 text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="/libros/{{ $libro->id }}/valorar">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-1">Puntuación (1-5)</label>
                        <input type="number" name="puntuacion" min="1" max="5" value="{{ old('puntuacion') }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Comentario</label>
                        <textarea name="comentario" rows="4"
                            class="border rounded px-3 py-2 w-full">{{ old('comentario') }}</textarea>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                        Enviar valoración
                    </button>
                    <a href="/libros/{{ $libro->id }}" class="ml-4 text-blue-600 underline">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>