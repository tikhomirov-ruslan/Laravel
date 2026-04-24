<?php

namespace Tests\Unit;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_store_and_retrieve_short_title()
    {
        $author = Author::factory()->create();
        $book = Book::create([
            'title'       => 'The Great Gatsby',
            'short_title' => 'Gatsby',
            'year'        => 1925,
            'author_id'   => $author->id,
        ]);

        $foundBook = Book::first();
        $this->assertEquals('Gatsby', $foundBook->short_title);
    }
}
