<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MovieController extends BaseController
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'title')->paginate(10);
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $movie = new Movie();
        $save = 'Crea';

        return view('movies.create', compact('movie', 'save'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:movies',
            'description' => 'required|string',
            'genre' => 'required|string',
        ],
        [
            'required' => 'Il campo :attribute è obbligatorio',
            'title.unique' => 'Il titolo esiste già'
        ]);

        $data = $request->all();

        $movie = new Movie();
        $movie->fill($data);
        $movie->slug= Str::slug($movie->title, '-');

        $movie->save();

        return redirect()->route('movies.show', compact('movie'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $save = 'Modifica';
        
        return view('movies.edit', compact('movie', 'save'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate(
            [
                'title' => ['required', 'string', Rule::unique('movies')->ignore($movie->id)],
                'description' => 'required|string',
                'genre' => 'required|string',
            ],
            [
                'required' => 'Il campo :attribute è obbligatorio',
                'title.unique' => 'Il titolo esiste già'
            ]
            );

            $data = $request->all();
            $data['slug'] = Str::slug($movie->title, '-');

            $movie->update($data);

            return redirect()->route('movies.show', $movie->id);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('alert-message', 'Film eliminato con successo.')->with('alert-type', 'success');
    }
}