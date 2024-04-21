<?php

namespace Database\Seeders;
use App\Models;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Category;
use App\Models\Programming;
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



        Programming::create([
            'judul' => 'Laravel',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);

        
        Programming::create([
            'judul' => 'Java Script',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);
        
        Programming::create([
            'judul' => 'Next Js',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);

        
        Programming::create([
            'judul' => 'Ruby',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);

        Programming::create([
            'judul' => 'Python',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);

        Programming::create([
            'judul' => 'Node js',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);
        Programming::create([
            'judul' => 'React Js',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);
        Programming::create([
            'judul' => 'Kotlin',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);

        Programming::create([
            'judul' => 'Swift',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);

        Programming::create([
            'judul' => 'Java',
            'body' => 'Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan OWASP security principles.'
        ]);














      
    }
}
