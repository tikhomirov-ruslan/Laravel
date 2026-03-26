<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAccountStatus;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
})->middleware('account_active');

