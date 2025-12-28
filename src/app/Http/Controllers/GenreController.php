<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct()
    {
        // Middleware admin sur TOUT le controller
        $this->middleware(function ($request, $next) {

            if (!auth()->check() || !auth()->user()->isAdmin()) {
                abort(403);
            }

            return $next($request);
        });
    }

    public function index()
    {
        $genres = Genre::orderBy('name')->get();
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:genres,name',
        ]);

        Genre::create([
            'name' => $request->name,
        ]);

        return redirect()->route('genres.index');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:genres,name,' . $genre->id,
        ]);

        $genre->update([
            'name' => $request->name,
        ]);

        return redirect()->route('genres.index');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('genres.index');
    }
}
