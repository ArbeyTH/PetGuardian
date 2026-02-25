<x-app-layout>
    <div class="py-6 px-6">
        <h2 class="text-xl font-bold mb-4">Editar Mascota</h2>

        <form action="{{ route('pets.update', $pet) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Nombre</label>
                <input type="text" name="name" value="{{ $pet->name }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Especie</label>
                <input type="text" name="species" value="{{ $pet->species }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Raza</label>
                <input type="text" name="breed" value="{{ $pet->breed }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Fecha de nacimiento</label>
                <input type="date" name="birth_date" value="{{ $pet->birth_date }}" class="border p-2 w-full">
            </div>

            <button class="bg-blue-500 text-red px-4 py-2 rounded">
                Actualizar
            </button>
        </form>
    </div>
</x-app-layout>