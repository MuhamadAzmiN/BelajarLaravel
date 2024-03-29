<?php

use App\Http\Controllers\PostController;
use App\Models\Post;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PostController::class, 'home']);
Route::get('/about', [PostController::class. 'about']);
Route::get('/blog', [PostController::class, 'index'] );
Route::get('posts/{slug}', [PostController::class, 'post']);
Route::get('author/{slug}', [PostController::class, 'author']);
Route::get('tahun/{slug}', [PostController::class, 'tahun'] );