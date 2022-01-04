<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {        
        $movies = file_get_contents('https://api.themoviedb.org/3/discover/movie/?api_key=f696298dbe386fee32974e49047db33d&language=it-IT');
        
        for ($i = 0; $i < 5; $i++) {
            $movie = curl_init('https://api.themoviedb.org/3/movie/' . $movies[$i]['id'] .'?api_key=f696298dbe386fee32974e49047db33d&language=it-IT');

            $data = [
                'title' => $movie['title'],
                'description' => $movie['overview'],
                'genre' => $movie['genres']['name'],
            ];
            $this->db->table('movies')->insert($data);
        }
        
    }
}
