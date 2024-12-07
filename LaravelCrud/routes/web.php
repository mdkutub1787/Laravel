<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Home route, passing all posts to the welcome view
Route::get('/', function () {
    return view('welcome', ['posts' => Post::all()]);
})->name('home');

// Route for creating a post
Route::get('/create', [PostController::class, 'create']);

// Route for storing a new post
Route::post('/store', [PostController::class, 'ourfilestore'])->name('store');
