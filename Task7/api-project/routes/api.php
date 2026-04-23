<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

// Публичный маршрут для логина
Route::post('/login', [AuthController::class, 'login']);

// Защищённые маршруты
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // CRUD категорий
    Route::apiResource('categories', CategoryController::class);
    Route::get('/products/{product}/categories', [CategoryController::class, 'getCategoriesByProduct']);
});