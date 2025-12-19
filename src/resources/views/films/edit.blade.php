<x-layouts.app title="Modifier le film">

    <h1 class="text-xl font-bold mb-4">Modifier le film</h1>

    <form method="POST" action="{{ route('films.update', $film) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Titre</label>
            <input type="text" name="title"
                   class="border p-2 w-full"
                   value="{{ old('title', $film->title) }}"
                   required>
        </div>

        <div>
            <label class="block">Réalisateur</label>
            <input type="text" name="director"
                   class="border p-2 w-full"
                   value="{{ old('director', $film->director) }}">
        </div>

        <div>
            <label class="block">Année</label>
            <input type="number" name="release_year"
                   class="border p-2 w-full"
                   value="{{ old('release_year', $film->release_year) }}">
        </div>

        <div>
            <label class="block">Genre</label>
            <select name="genre_id" class="border p-2 w-full" required>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}"
                        @selected(old('genre_id', $film->genre_id) == $genre->id)>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block">Synopsis</label>
            <textarea name="synopsis" class="border p-2 w-full">
{{ old('synopsis', $film->synopsis) }}
            </textarea>
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Enregistrer les modifications
        </button>

    </form>

</x-layouts.app>
