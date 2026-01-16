<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::controller(NewsController::class)->group(function () {
    Route::get('/news/{id}', 'show');
    Route::post('/news', 'create');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts/{id}', 'show');
    Route::post('/posts', 'create');
});

Route::middleware('auth:sanctum')->controller(CommentController::class)->group(function () {
    Route::get('/comments/{id}', 'show');
    Route::post('/comments', 'create');
    Route::put('/comments/{id}', 'update');
    Route::delete('/comments/{id}', 'delete');
});

