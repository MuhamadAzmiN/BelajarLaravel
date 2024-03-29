<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "Judul Post Pertama",
        "author" => "Muhamad Azmi Naziyulloh",
        "tahun" => 2020,
        "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quidem velit corporis. Esse ipsum at eius dignissimos numquam, a eligendi, temporibus error optio magni neque! Quos quae doloremque animi saepe Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "Judul Poast Kedua",
        "author" => "Pak Sandika Galih",
        "tahun" => 2021,
        "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
    ],
    [
        "title" => "Judul Post Ketiga",
        "slug" => "Judul Poast Kedua",
        "author" => "Pak Sandika Galih",
        "tahun" => 2023,
        "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dicta libero necessitatibus consequuntur neque maxime minus eaque omnis, nobis laudantium, optio ullam modi deleniti? Vero non fugit laboriosam ea? Quia autem natus atque earum nobis. Exercitationem aliquid est voluptatem laboriosam dolorum, minima nam, accusantium sunt fuga doloremque dolore rerum perferendis explicabo voluptatibus id expedita facilis ratione a impedit? Iste voluptates repudiandae hic tenetur deleniti quasi dolorum similique, adipisci eius quas eligendi, ipsam nobis quisquam ut aliquid consequuntur aperiam possimus ea porro eveniet labore iusto quaerat. Veniam, alias sed! Soluta minus non labore vel dolore nisi vero vitae tempora, similique iure.."
    ],

];

public static function all()
{
    return collect(self::$blog_posts);
}
public static function find($slug)
{

    // cara ke 1
    // $posts = self::$blog_posts;
    // $post = [];
    // foreach($posts as $p){
    //     if($p["slug"] === $slug){
    //         $post = $p;
    //     }
    // }
    // return $post;
    $post = static::all();
    return $post->firstWhere('slug', $slug);
}
}
