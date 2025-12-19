<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            'Action',
            'Comédie',
            'Drame',
            'Science-Fiction',
            'Horreur',
            'Thriller',
            'Animation',
        ];

        foreach ($genres as $name) {
            Genre::firstOrCreate([
                'name' => $name,
            ]);
        }
    }
}
