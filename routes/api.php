<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogPostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Student public routes
Route::post('/register', [StudentController::class, 'register']);
Route::post('/login', [StudentController::class, 'login']);

// Scholarship public routes
Route::get('/scholarships', [ScholarshipController::class, 'getAllScholarships']);
Route::get('/scholarship/{id}', [ScholarshipController::class, 'getScholarshipById']);


Route::middleware('auth:sanctum')->group(function () {
    // Student routes
    Route::get('/student', [StudentController::class, 'getStudentById']);

    // Applications routes
    Route::post('/apply', [ApplicationsController::class, 'apply']);
    Route::get('/applications', [ApplicationsController::class, 'getApplicationsByStudentId']);

    // Scholarship routes 
    Route::post('/scholarships', [ScholarshipController::class, 'createScholarShip']);

    // Favorites routes
    Route::post('/favorites', [FavoritesController::class, 'addFavorite']);
    Route::delete('/favorites', [FavoritesController::class, 'removeFavorite']);
    Route::get('/favorites', [FavoritesController::class, 'getFavoriteByStudentId']);
});
