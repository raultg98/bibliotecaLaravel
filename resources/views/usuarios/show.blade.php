<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil del usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto">
            <div class="bg-white shadow-sm rounded-lg p-6">

                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <p><strong>Email:</strong> {{ $usuario->email }}</p>

                <div class="flex gap-2 mt-4">
                    <a href="/usuarios/{{ $usuario->id }}/editar" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
                    <a href="/usuarios" class="bg-gray-600 text-white px-4 py-2 rounded">Volver a la lista</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>