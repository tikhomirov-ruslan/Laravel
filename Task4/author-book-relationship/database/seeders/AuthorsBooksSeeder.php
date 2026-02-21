<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorsBooksSeeder extends Seeder
{
    public function run(): void
    {
        // Create 3 authors
        Author::factory(3)
            ->has(Book::factory(2)) // each author gets 2 books
            ->create();
    }
}