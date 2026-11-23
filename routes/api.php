<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookInStoreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::prefix('/authors')->group(function () {
    Route::get('', [AuthorController::class, 'index']);
    Route::post('', [AuthorController::class, 'store']);
    Route::get('/test', [AuthorController::class, 'test']);

    Route::delete('/{id}', [AuthorController::class, 'destroy']);
    Route::get('/{id}', [AuthorController::class, 'show']);
    Route::patch('/{id}', [AuthorController::class, 'update']);
});



Route::prefix('/books')->group(function () {
    Route::get('', [BookController::class, 'index']);
    Route::post('', [BookController::class, 'store']);
    Route::get('/test', [BookController::class, 'test']);
 
    Route::delete('/{id}', [BookController::class, 'destroy']);
    Route::get('/{id}', [BookController::class, 'show']);
    Route::patch('/{id}', [BookController::class, 'update']);
});

Route::prefix('/stores')->group(function () {
    Route::get('/books/add', [BookInStoreController::class, 'test']);    
    Route::get('/test', [BookInStoreController::class, 'test']);    
    Route::post('', [BookInStoreController::class, 'store']);
    
    Route::get('/{id}', [BookInStoreController::class, 'show']);    
    Route::get('/{id}/books', [BookInStoreController::class, 'indexBooks']);    
});