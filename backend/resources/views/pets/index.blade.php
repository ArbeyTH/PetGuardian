<x-app-layout>
    <div class="py-6 px-6">
        <h2 class="text-xl font-bold mb-4">Mis Mascotas</h2>

        <a href="{{ route('pets.create') }}" class="bg-blue-500 text-red px-4 py-2 rounded">
            Agregar Mascota
        </a>

        <div class="mt-4">
            @if($pets->count())
                <table class="w-full border mt-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2">Nombre</th>
                            <th class="p-2">Especie</th>
                            <th class="p-2">Raza</th>
                            <th class="p-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                            <tr class="border">
                                <td class="p-2">{{ $pet->name }}</td>
                                <td class="p-2">{{ $pet->species }}</td>
                                <td class="p-2">{{ $pet->breed }}</td>
                                <td class="p-2">
                                    <a href="{{ route('pets.edit', $pet) }}" class="text-yellow-600">
                                        Editar
                                    </a>

                                    <form action="{{ route('pets.destroy', $pet) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 ml-2">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="mt-4">No tienes mascotas registradas.</p>
            @endif
        </div>
    </div>
</x-app-layout>