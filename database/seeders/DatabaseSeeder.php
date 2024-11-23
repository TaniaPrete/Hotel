<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creazione di un utente di test
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Creazione degli articoli
        Article::create([
            'title' => 'Benvenuti nel nostro hotel',
            'content' => 'Scopri le meraviglie del nostro hotel situato in una splendida posizione.',
            'author' => 'Staff Hotel',
            'published_at' => now(),
        ]);

        Article::create([
            'title' => 'Offerta speciale inverno 2024',
            'content' => 'Prenota ora e ricevi uno sconto del 20% sul tuo soggiorno!',
            'author' => 'Marketing Team',
            'published_at' => now(),
        ]);
    }
}
