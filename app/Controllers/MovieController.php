<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movie;

class Moviecontroller extends BaseController
{
    public function index()
    {
        $movie = new Movie();
        $data['movies'] = $movie->findAll();

        $data['pagination_link'] = $movie->pager;
        
        return view('home', $data);
    }


    public function add()
    {
        return view('create');
    }


    public function add_validation()
    {
        helper(['form', 'url']);

        $error = $this->validate([
            'title' => 'required|min_length[1]',
            'genre' => 'required|min_length[3]'
        ]);

        if(!$error)
        {
            echo view('create', [
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

    public function edit($id = null)
    {
        $movie = new Movie();

        $data['movies'] = $movie->where('id', $id)->first();

        return view('edit', $data);
    }


    public function edit_validation()
    {
        helper(['form', 'url']);

        $error = $this->validate([
            'title' => 'required|min_length[1]',
            'genre' => 'required|min_length[3]'
        ]);

        if(!$error)
        {
            echo view('edit', [
                'error' => $this->validator
            ]);
        }
        else
        {
            $movie = new Movie();
            $id = $this->request->getVar('id');

            $movie = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'genre' => $this->request->getVar('genre')
            ];

            $movie->update($id, $data);

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Film modificato con successo');

            return $this->response->redirect(site_url('/'));
        }
    }


    public function delete($id)
    {
        $movie = new Movie();

        $movie->where('id', $id)->delete($id);

        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Film eliminato');

        return $this->response->redirect(site_url('/'));
    }


    public function show($movie)
    {
        return view('show');
    }
}