<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar libro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto">
            <div class="bg-white shadow-sm rounded-lg p-6">

                @if ($errors->any())
                    <ul class="mb-4 text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="/libros/{{ $libro->id }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-1">Título</label>
                        <input type="text" name="titulo" value="{{ old('titulo', $libro->titulo) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Autor</label>
                        <input type="text" name="autor" value="{{ old('autor', $libro->autor) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Género</label>
                        <input type="text" name="genero" value="{{ old('genero', $libro->genero) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Editorial</label>
                        <input type="text" name="editorial" value="{{ old('editorial', $libro->editorial) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Páginas</label>
                        <input type="number" name="paginas" value="{{ old('paginas', $libro->paginas) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Año</label>
                        <input type="number" name="anio" value="{{ old('anio', $libro->anio) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Precio</label>
                        <input type="number" step="0.01" name="precio" value="{{ old('precio', $libro->precio) }}"
                            class="border rounded px-3 py-2 w-full">
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                        Guardar cambios
                    </button>
                    <a href="/libros/{{ $libro->id }}" class="ml-4 text-blue-600 underline">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>