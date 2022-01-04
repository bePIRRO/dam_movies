<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        /* $data = [
            'title' => 'Fight Club',
            'description' => "'Un uomo di trent'anni è insofferente su tutto e la notte non riesce più a dormire. In cerca di qualche luogo dove scaricare la propria ansia si mette a frequentare quei corsi dove gruppi di malati gravi si riuniscono e confessano agli altri le rispettive situazioni. Mentre si lascia andare alla commozione e al pianto di fronte a quello che vede, l'uomo fa la conoscenza prima di Marla Singer poi di Tyler Durden. Lei è una ragazza a sua volta alla deriva, incapace di scelte o decisioni; lui è un tipo deciso e vigoroso con un'idea precisa in testa. Tyler fa saltare per aria l'appartamento dell'uomo e i due vanno a vivere insieme in una casa fatiscente. Deciso a coinvolgerlo nel suo progetto, Tyler lo fa entrare in un 'Fight Club', uno stanzone sotterraneo dove ci si riunisce per picchiarsi e in questo modo sentirsi di nuovo vivi'",
            'genre' => 'Dramma',
        ]; */

        

        // Simple Queries
        $this->db->query("INSERT INTO movies (title, description, genre) VALUES(:title:, :description: :genre:)", $data);

        // Using Query Builder
        $this->db->table('movies')->insert($data);
    }
}
