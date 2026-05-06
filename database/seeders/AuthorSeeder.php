<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Authors;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $authors = [
            ['name' => 'Author 1', 'email' => 'author1@ex.com'],
            ['name' => 'Author 2', 'email' => 'author2@ex.com'],
            ['name' => 'Author 3', 'email' => 'author3@ex.com'],
        ];

        foreach ($authors as $author) {
            Authors::create($author);
        }

    }
}
