<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AppController::class,'welcome']);



// //Read
// Route::get( '/posts', [PostController::class,'allPosts']);
// Route::get('/posts/{id}', [PostController::class,'getPost']);
// //Create
// Route::get('/posts/create', [PostController::class,'createPostForm']);
// Route::post('/posts', [PostController::class,'createPost']);
// //Edit
// Route::get('/posts/{id}/edit', [PostController::class,'editPostForm']);
// Route::put('/posts/{id}', [PostController::class,'editPost']);
// //Delete
// Route::delete('/posts/{id}', [PostController::class,'deletePost']);


Route::resource('/posts', PostController::class);