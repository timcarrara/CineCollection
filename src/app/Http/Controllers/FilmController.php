<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = \App\Models\Film::with('genre')->get();

        return view('films.index', compact('films'));
    }

    public function create()
    {
        $genres = Genre::orderBy('name')->get();

        return view('films.create', compact('genres'));
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'release_year' => 'nullable|integer',
        ]);

        Film::create([
            'title' => $request->title,
            'director' => $request->director,
            'release_year' => $request->release_year,
            'synopsis' => $request->synopsis,
            'genre_id' => $request->genre_id,
            'user_id' => 1, // temporaire
        ]);

        return redirect()->route('films.index');
    }

    public function edit(Film $film)
    {
        $genres = Genre::orderBy('name')->get();

        return view('films.edit', compact('film', 'genres'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'release_year' => 'nullable|integer',
        ]);

        $film->update([
            'title' => $request->title,
            'director' => $request->director,
            'release_year' => $request->release_year,
            'synopsis' => $request->synopsis,
            'genre_id' => $request->genre_id,
        ]);

        return redirect()->route('films.show', $film);
    }

}
