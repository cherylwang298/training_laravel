<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $books = [
            ['title' => 'Book 1', 'description' => 'Description 1', 'author_id' => 1],
            ['title' => 'Book 2', 'description' => 'Description 2', 'author_id' => 1],
            ['title' => 'Book 3', 'description' => 'Description 3', 'author_id' => 2],
        ];

        foreach ($books as $book) {
            Books::create($book);
        }


    }
}
