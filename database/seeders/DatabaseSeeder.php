<?php

namespace Database\Seeders;
use App\Models;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
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
        User::factory(10)->create();
        Post::factory(10)->create();
        Role::factory(10)->create();    


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web programing',
        ]);


        Category::create([
            'name' => 'Editor',
            'slug' => 'Editor'
        ]);

        
        Category::create([
            'name' => 'Influencer',
            'slug' => 'Influencer'
        ]);


        Category::create([
            'name' => 'Teacher',
            'slug' => 'Teacher'
        ]);

        Category::create([
            'name' => 'gardener',
            'slug' => 'gardener'
        ]);


      
    }
}
