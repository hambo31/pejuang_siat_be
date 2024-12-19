<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route untuk Film
Route::get('/films', [FilmController::class, 'index']); // Daftar film
Route::get('/films/{id}', [FilmController::class, 'show']); // Detail film

// Route untuk Review
Route::get('/reviews/{filmId}', [ReviewController::class, 'getReviews']); // Reviews berdasarkan film

// Route untuk kategori
Route::get('categories', [CategoryController::class, 'index']);
