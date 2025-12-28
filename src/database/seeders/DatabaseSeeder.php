<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Genres
        $this->call(GenreSeeder::class);

        // Admin
        $this->call(AdminSeeder::class);

        // Utilisateur de test (user classique)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'user',
        ]);
    }
}
