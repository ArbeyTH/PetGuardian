<x-app-layout>
    <div class="py-6 px-6">
        <h2 class="text-xl font-bold mb-4">Registrar Mascota</h2>

        <form action="{{ route('pets.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label>Nombre</label>
                <input type="text" name="name" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Especie</label>
                <input type="text" name="species" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Raza</label>
                <input type="text" name="breed" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Fecha de nacimiento</label>
                <input type="date" name="birth_date" class="border p-2 w-full">
            </div>

            <button class="bg-green-500 text-red px-4 py-2 rounded">
                Guardar
            </button>
        </form>
    </div>
</x-app-layout>