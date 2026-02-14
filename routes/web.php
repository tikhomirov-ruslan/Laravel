<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SimpleController;
use App\Http\Controllers\AboutController;

Route::get('/simple', [SimpleController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

// Route::get('/simple', function() {
//     return view('simple');
// });

Route::get('/', function () {
    return view('welcome');
});
