<x-layouts.app title="Films">

    <h1 class="text-xl font-bold mb-4">Films</h1>

    @if ($films->isEmpty())
        <p>Aucun film pour le moment.</p>
    @else
        <ul>
            @foreach ($films as $film)
                <li class="mb-4 border p-4 rounded">
                    <strong>{{ $film->title }}</strong><br>

                    Genre :
                    {{ optional($film->genre)->name ?? 'Non défini' }}<br>

                    Ajouté par :
                    {{ optional($film->user)->name ?? 'Inconnu' }}
                </li>
            @endforeach
        </ul>
    @endif

</x-layouts.app>
