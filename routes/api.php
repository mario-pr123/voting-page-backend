<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VotesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories/{id}', [CategoriesController::class, 'show']);
Route::get('cats/{id}', [CategoriesController::class, 'showCat']);
Route::get('category/{id}', [CategoryController::class, 'index']);
Route::get('category', [CategoryController::class, 'show']);
Route::post('vote', [VotesController::class, 'store']);
Route::get('results/{id}', [VotesController::class, 'results']);
Route::get('type', [TypeController::class, 'index']);