<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

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


    public function post($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }

    public function author($slug){
        return view('author', [
            "title" => "Halaman Author",
            "aut" => Post::find($slug)
        ]);
    }

    public function tahun($slug){
        return view('tahunTerbit', [
            "title" => "Halaman Tahun",
            "tahun" => Post::find($slug)
    
        ]);
    }

}
