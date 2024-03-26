<?php

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
Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "halaman" => "Ini adalah Halaman home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Azmi Naziyulloh",
        "Email" => "azmi89017@gmail.com"
    ]);
});


Route::get('/blog', function () {
    
$blog_post = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "Judul Post Pertama",
        "author" => "Muhamad Azmi Naziyulloh",
        "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quidem velit corporis. Esse ipsum at eius dignissimos numquam, a eligendi, temporibus error optio magni neque! Quos quae doloremque animi saepe Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "Judul Poast Kedua",
        "author" => "Pak Sandika Galih",
        "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
    ],

];
    return view('posts', [
        "title" => "Blog",
        "Judul" => "Halaman",
        "post" => $blog_post
    ]);
});


Route::get('posts/{slug}', function($slug ){
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Muhamad Azmi Naziyulloh",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quidem velit corporis. Esse ipsum at eius dignissimos numquam, a eligendi, temporibus error optio magni neque! Quos quae doloremque animi saepe Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Poast Kedua",
            "author" => "Pak Sandika Galih",
            "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "Judul Poast Kedua",
            "author" => "Pak Sandika Galih",
            "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
        ],
    
    ];
    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('author/{slug}', function($slug){
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Muhamad Azmi Naziyulloh",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quidem velit corporis. Esse ipsum at eius dignissimos numquam, a eligendi, temporibus error optio magni neque! Quos quae doloremque animi saepe Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Poast Kedua",
            "author" => "Pak Sandika Galih",
            "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "Judul Poast Kedua",
            "author" => "Pak Sandika Galih",
            "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
        ],
    
    ];
    $new_author = [];
    foreach($blog_post as $item){
        if($item["slug"] === $slug){
            $new_author = $item;
        }
    }
    return view('author', [
        "title" => "Halaman Author",
        "aut    " => $new_author
    ]);
});