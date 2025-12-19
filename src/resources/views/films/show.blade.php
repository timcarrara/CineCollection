<x-layouts.app title="{{ $film->title }}">

    <h1 class="text-2xl font-bold mb-4">{{ $film->title }}</h1>

    <p><strong>Réalisateur :</strong> {{ $film->director ?? 'Non renseigné' }}</p>
    <p><strong>Année :</strong> {{ $film->release_year ?? '—' }}</p>
    <p><strong>Genre :</strong> {{ optional($film->genre)->name }}</p>

    <div class="mt-4">
        <strong>Synopsis :</strong>
        <p class="mt-1">{{ $film->synopsis ?? 'Aucun synopsis' }}</p>
    </div>

    <a href="{{ route('films.edit', $film) }}"
        class="inline-block mb-4 bg-yellow-500 text-white px-4 py-2 rounded">
        ✏️ Modifier
    </a>


    <a href="{{ route('films.index') }}"
       class="inline-block mt-6 text-blue-600 underline">
        ← Retour à la liste
    </a>

</x-layouts.app>
