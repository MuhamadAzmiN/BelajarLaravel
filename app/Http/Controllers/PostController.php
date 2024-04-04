<?php

namespace App\Http\Controllers;
use App\Models\Post;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "Judul" => "Halaman",
            "post" => Post::all()
        ]);
    }

    public function home()
    {
        return view('home', [
            "title" => "Home",
            "halaman" => "Ini adalah Halaman home"
        ]);
    }


    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Muhamad Azmi Naziyulloh",
            "Email" => "azmi89017@gmail.com"
        ]);
    }


    public function post( Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function author(Post $author){
        return view('author', [
            "title" => "Halaman Author",
            "aut" => $author        
        ]);
    }

    public function tahun($slug){
        return view('tahunTerbit', [
            "title" => "Halaman Tahun",
            "tahun" => Post::find($slug)
    
        ]);
    }

    public function cateAll()
    {
        return view('category', [
            'title' => "Category",
            'categories' => Category::all()
        ]);
    }

    public function cateSingle(Category $category)
    {
        return view('categories', [
            "title" => $category->name,
            "post" => $category->posts,
            "category" => $category->name
        ]);
    }

}
