<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Studio;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        // Fetching all movies to show in the full list
        $movies = Movie::all(); 
        return view('movies.index', compact('movies'));
    }

    public function create() {
        $directors = Director::all();
        $studios = Studio::all(); 
        return view('movies.create', compact('directors', 'studios'));
    }

    public function store(Request $request) {
        // 1. Validation: If this fails, Laravel redirects back to the form automatically
        $validated = $request->validate([
            'idMovie' => 'required|integer|unique:movies,idMovie',
            'Director_idDirector' => 'required',
            'Studio_idStudio' => 'required',
            'name_movie' => 'required|max:40',
            'country_of_release' => 'required|max:20',
            'year_of_release' => 'required|integer',
            'language' => 'required|max:15',
            'filming_location' => 'required|max:30',
            'category' => 'required|max:20',
        ]);

        // 2. Creation: Using validated data ensures it matches your $fillable array
        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    public function edit(Movie $movie) {
        $directors = Director::all();
        $studios = Studio::all();
        return view('movies.edit', compact('movie', 'directors', 'studios'));
    }

    public function update(Request $request, Movie $movie) {
        $validated = $request->validate([
            'Director_idDirector' => 'required',
            'Studio_idStudio' => 'required',
            'name_movie' => 'required|max:40',
            'country_of_release' => 'required|max:20',
            'year_of_release' => 'required|integer',
            'language' => 'required|max:15',
            'filming_location' => 'required|max:30',
            'category' => 'required|max:20',
        ]);

        $movie->update($validated);
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie) {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}