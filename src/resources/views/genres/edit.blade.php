<x-layouts.app title="Modifier le genre">

    <h1 class="text-xl font-bold mb-4">Modifier le genre</h1>

    <form method="POST" action="{{ route('genres.update', $genre) }}">
        @csrf
        @method('PUT')

        <input type="text"
               name="name"
               class="border p-2 w-full mb-4"
               value="{{ old('name', $genre->name) }}"
               required>

        <button class="bg-yellow-600 text-white px-4 py-2 rounded">
            Modifier
        </button>
    </form>

</x-layouts.app>
