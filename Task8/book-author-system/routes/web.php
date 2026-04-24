<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Models\Author;

Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', function (Author $author) {
    return $author->fullName();
})->name('authors.show');

Route::get('/', function () {
    return view('welcome');
});
