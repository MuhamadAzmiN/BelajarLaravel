<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Role;
use App\Models\Programming;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    public function index()
    {   

        // dd(request('cari'));
        return view('posts', [
            "title" => "All Post",
            "active" => "blog",
            "Judul" => "Halaman",
            "posts" => Post::latest()->filter()->get()
        ]);
    }

    public function home()
    {
        return view('home', [
            "title" => "Home",
            "active" => "Home",
            "halaman" => "Ini adalah Halaman home"
        ]);
    }


    public function about()
    {
        return view('about', [
            "title" => "About",
            "title" => "About",
            "name" => "Muhamad Azmi Naziyulloh",
            "Email" => "azmi89017@gmail.com"
        ]);
    }


    public function post( Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            'active' => "Single Post",
            "post" => $post
        ]);
    }

    // public function author(Post $author){
    //     return view('author', [
    //         "title" => "Halaman Author",
    //         "aut" => $author        
    //     ]);
    // }

    public function tahun($slug){
        return view('tahunTerbit', [
            "title" => "Halaman Tahun",
            "active" => "Halaman Tahun",
            "tahun" => Post::find($slug)
    
        ]);
    }

    public function cateAll()
    {
        return view('category', [
            'title' => "Category",
            'active' => "Category",
            'categories' => Category::all()
        ]);
    }

    public function cateSingle(Category $category)
    {
        return view('posts', [
            "title" => "Post by Category $category->name",
            "active" => "Post by Category $category->name",
            "posts" => $category->posts->load('category', 'author'),
            "category" => $category->name
        ]);
    }

    public function author(User $author)
    {
        return view('posts', [
            'title' => "Post by  Author $author->name",
            'active' => "Post by  Author $author->name",
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }


    public function authorAll()
    {
        return view('posts', [
            'title' => 'AuthorAll',
            'active' => 'AuthorAll',
            'posts' => Post  ::all()
        ]);
    }
    public function RoleAll()
    {
        return view('Role', [
            'title' => "Role",
            'active' => "Role",
            'role' => Role::all()

        ]);
    }


    public function Roles(Role $roles)
    {
        return view('Roles', [
            'title' => $roles->name,
            'active' => $roles->name,
            'post' => $roles->posts
        ]);
    }
    public function All()
    {
        return view('All', [
            'title' => "All",
            'active' => "All",
            'post' => Post::all()
        ]);
    }
    

    public function Programming()
    {
        return view('Programming', [
            'title' => 'Programming',
            'active' => 'Programming',
            'Prog' => Programming::all()
        ]);
    }

}
