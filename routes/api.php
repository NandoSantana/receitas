<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\CategoryController;

if (app()->environment('e2e')) {
    Route::post('/test-reset', fn () => Artisan::call('migrate:fresh --seed'));
}

Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{id}', [RecipeController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
