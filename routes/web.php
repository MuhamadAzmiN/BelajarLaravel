<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isEmpty;

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
Route::get('/about', [PostController::class, 'about']);
Route::get('/blog', [PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'post']);
Route::get('author/{author:slug}', [PostController::class, 'author']);
Route::get('tahun/{slug}', [PostController::class, 'tahun'] );
Route::get('categories', [PostController::class, 'cateAll'] );
Route::get('/categories/{category:slug}', [PostController::class, 'cateSingle']);
Route::get('/authors/{author:username}', [PostController::class, 'author'] );
Route::get('/authorAll', [PostController::class, 'authorAll']);