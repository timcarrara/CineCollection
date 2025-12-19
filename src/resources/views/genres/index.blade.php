<x-layouts.app title="Genres">

    <h1 class="text-xl font-bold mb-4">Genres</h1>

    <a href="{{ route('genres.create') }}"
       class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded">
        ➕ Ajouter un genre
    </a>

    <ul>
        @foreach ($genres as $genre)
            <li class="mb-2 border p-2 rounded flex justify-between">
                {{ $genre->name }}

                <div>
                    <a href="{{ route('genres.edit', $genre) }}"
                       class="text-yellow-600 mr-2">
                        ✏️ Modifier
                    </a>

                    <form method="POST"
                          action="{{ route('genres.destroy', $genre) }}"
                          class="inline"
                          onsubmit="return confirm('Supprimer ce genre ?');">
                        @csrf
                        @method('DELETE')

                        <button class="text-red-600">
                            🗑 Supprimer
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</x-layouts.app>
