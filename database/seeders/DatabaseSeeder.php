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
        User::factory(50)->create();
        Post::factory(20)->create();
        Role::factory(20)->create();    


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web programing',
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Role::create([
        //     'name' => 'BackEnd Developer',
        //     'slug' => 'backend developer'
        // ]);
        
        // Role::create([
        //     'name' => 'Frontend Developer',
        //     'slug' => 'frontend developer'
        // ]);
        
        // Role::create([
        //     'name' => 'Mobile Developer',
        //     'slug' => 'Mobile developer'
        // ]);
        // Role::create([
        //     'name' => 'Data Scientic',
        //     'slug' => 'data scientic'
        // ]);
      
    }
}
