<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategorieController;
use App\Http\Controllers\Api\ListeController;
use App\Http\Controllers\Api\MovieController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);


    Route::apiResource('listes', ListeController::class);
    Route::apiResource('categories', CategorieController::class);
    Route::apiResource('movies', MovieController::class);
     });




