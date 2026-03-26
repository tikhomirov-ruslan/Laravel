<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{user}', function (App\Models\User $user) {
    return $user -> name;
});