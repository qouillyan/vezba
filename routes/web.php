<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('single-post');
Route::post('/posts', [PostsController::class, 'store']);
Route::post('/posts/{id}/comments', [CommentsController::class, 'store']);
Route::get('/users/{id}', [UsersController::class, 'show'])->name('single-user');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy']);
