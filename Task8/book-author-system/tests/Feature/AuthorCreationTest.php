<?php

namespace Tests\Feature;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorCreationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_author_via_post_request()
    {
        $authorData = [
            'name'      => 'Jane',
            'surname'   => 'Austen',
            'birthdate' => '1775-12-16',
        ];

        $response = $this->post(route('authors.store'), $authorData);

        $response->assertStatus(302);
        $response->assertRedirect(route('authors.show', Author::first()));

        $this->assertDatabaseHas('authors', $authorData);
    }
}
