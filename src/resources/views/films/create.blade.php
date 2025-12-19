<x-layouts.app title="Ajouter un film">

    <h1 class="text-xl font-bold mb-4">Ajouter un film</h1>

    <form method="POST" action="{{ route('films.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block">Titre</label>
            <input type="text" name="title" class="border p-2 w-full" required>
        </div>

        <div>
            <label class="block">Réalisateur</label>
            <input type="text" name="director" class="border p-2 w-full">
        </div>

        <div>
            <label class="block">Année</label>
            <input type="number" name="release_year" class="border p-2 w-full">
        </div>

        <div>
            <label class="block">Genre</label>
            <select name="genre_id" class="border p-2 w-full" required>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block">Synopsis</label>
            <textarea name="synopsis" class="border p-2 w-full"></textarea>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Enregistrer
        </button>
    </form>

</x-layouts.app>
