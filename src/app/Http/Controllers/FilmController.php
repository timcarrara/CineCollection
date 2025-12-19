<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = \App\Models\Film::with('genre')->get();

        return view('films.index', compact('films'));
    }

}
