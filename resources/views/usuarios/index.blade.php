<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Listado de usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white shadow-sm rounded-lg p-6">

                @auth
                    <p class="mb-4">Hola, {{ Auth::user()->name }}</p>
                @endauth

                <ul class="space-y-3">
                    @foreach ($usuarios as $usuario)
                        <li class="flex items-center justify-between border-b pb-2">
                            <span>
                                {{ $usuario->name }} - {{ $usuario->email }}
                            </span>
                            <div class="flex gap-2 ml-4 shrink-0">
                                <a href="/usuarios/{{ $usuario->id }}" class="bg-gray-600 text-white px-3 py-1 rounded text-sm">Ver</a>
                                <a href="/usuarios/{{ $usuario->id }}/editar" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">Editar</a>
                                <form action="/usuarios/{{ $usuario->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm">Borrar</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                    @csrf
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Cerrar sesión</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>