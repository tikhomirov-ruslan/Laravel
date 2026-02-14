<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SimpleController;

Route::get('/simple', [SimpleController::class, 'index']);

// Route::get('/about', 'SimplePageController@about');

// Route::get('/simple', function() {
//     return view('simple');
// });

Route::get('/', function () {
    return view('welcome');
});
