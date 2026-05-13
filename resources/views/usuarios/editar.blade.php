<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto">
            <div class="bg-white shadow-sm rounded-lg p-6">

                <form action="/usuarios/{{ $usuario->id }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div class="mb-4">
                        <label class="block mb-1">Nombre</label>
                        <input type="text" name="name" value="{{ old('name', $usuario->name) }}" class="border rounded px-3 py-2 w-full">
                        @foreach($errors->get("name") as $error)
                            <p class="text-red-600 text-sm mt-1">{{ $error }}</p>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">e-Mail</label>
                        <input type="text" name="email" value="{{ old('email', $usuario->email) }}" class="border rounded px-3 py-2 w-full">
                        @foreach($errors->get("email") as $error)
                            <p class="text-red-600 text-sm mt-1">{{ $error }}</p>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Contraseña</label>
                        <input type="password" name="password" class="border rounded px-3 py-2 w-full">
                        @foreach($errors->get("password") as $error)
                            <p class="text-red-600 text-sm mt-1">{{ $error }}</p>
                        @endforeach
                    </div>

                    <div class="flex gap-2">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar cambios</button>
                        <a href="/usuarios/{{ $usuario->id }}" class="bg-gray-600 text-white px-4 py-2 rounded">Cancelar</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>