<?php

namespace Database\Seeders;
use App\Models;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(3)->create();
        Post::factory(20)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web programing',
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
      
    }
}
