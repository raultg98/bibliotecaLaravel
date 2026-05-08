<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800">
            Listado de libros
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[1200px] mx-auto">
            <div class="bg-white p-6">

                <ul class="space-y-2">
                    @foreach ($libros as $libro)
                        <li>
                            <a href="/libros/{{ $libro->id }}" class="text-blue-600 underline">
                                {{ $libro->titulo }}
                            </a>
                            — {{ $libro->autor }} ({{ $libro->anio }}) — {{ $libro->precio }}€
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>