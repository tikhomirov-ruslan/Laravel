<?php

namespace Tests\Unit;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function full_name_returns_correct_string()
    {
        $author = Author::create([
            'name'      => 'John',
            'surname'   => 'Doe',
            'birthdate' => '1980-01-01',
        ]);

        $this->assertEquals('John Doe', $author->fullName());
    }
}
