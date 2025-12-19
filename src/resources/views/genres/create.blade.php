<x-layouts.app title="Ajouter un genre">

    <h1 class="text-xl font-bold mb-4">Ajouter un genre</h1>

    <form method="POST" action="{{ route('genres.store') }}">
        @csrf

        <input type="text"
               name="name"
               class="border p-2 w-full mb-4"
               placeholder="Nom du genre"
               required>

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Enregistrer
        </button>
    </form>

</x-layouts.app>
