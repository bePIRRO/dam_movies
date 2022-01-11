<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movie;

class MovieController extends BaseController
{
    public function index()
    {
        $movie = new Movie();
        $data['movies'] = $movie->findAll();
        return view('welcome_message.php', $data);
    }

    public function add()
    {
        return view('add_data');
    }

    public function add_validation()
    {
        helper(['form', 'url']);

        $error = $this->validate([
            'title' => 'required|min_length[1]',
            'description',
            'genre' => 'required!min_length[3]'
        ]);

        if(!$error)
        {
            echo view('add_data', [
                'error' => $this->validator
            ]);
        }
        else
        {
            $movie = new Movie();
            $movie->save([
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'genre' => $this->request->getVar('genre')
            ]);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Film aggiunto con successo');

            return $this->response->redirect(site_url('/'));
        }
    }

    public function show(Movie $movie)
    {
        return view('movies/show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $save = 'Modifica';
        
        return view('movies/edit', compact('movie', 'save'));
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
            return redirect()->route('movies/show', $movie->id);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('index')->with('alert-message', 'Film eliminato con successo.')->with('alert-type', 'success');
    }
}