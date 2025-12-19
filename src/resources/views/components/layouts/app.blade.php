<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'CineCollection' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <nav class="bg-white shadow p-4 mb-6">
        <a href="/" class="font-bold">🎬 CineCollection</a>
        <a href="/films" class="ml-4">Films</a>
        <a href="/genres" class="ml-4">Genres</a>
    </nav>

    <main class="max-w-5xl mx-auto px-4">
        {{ $slot }}
    </main>

</body>
</html>
