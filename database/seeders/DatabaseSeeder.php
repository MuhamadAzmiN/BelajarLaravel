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
        // User::factory(3)->create();
        Post::factory(5)->create();
        // User::create([
        //     'name' => 'Azmi',
        //     'email' => 'Azmi89017@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'dody',
        //     'email' => 'dody@gmail.com',
        //     'password' => bcrypt('12')
        // ]);


        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => 'judul pertama',
        //     'category_id' => 1,
        //     'author' => 'Muhamad Azmi Naziyulloh',
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt exercitationem animi quod, ex tenetur nihil unde nam, obcaecati eveniet totam quibusdam iure quisquam natus eius eaque provident rerum recusandae expedita!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque qui modi eveniet architecto nobis aspernatur laboriosam voluptate eligendi laborum amet voluptatum in quos ducimus, possimus saepe fugit quisquam vitae sint ipsum nemo quasi, porro est! Provident molestias ex ipsum vitae error illum necessitatibus officiis assumenda expedita ab nisi corporis ratione unde, magni labore est aut fugiat eos quaerat perspiciatis neque, cumque sit praesentium? Totam, dolor! Quos cum eaque, totam excepturi neque consequatur odit architecto repudiandae asperiores quibusdam sapiente. Labore aperiam accusamus ipsam culpa doloremque, facilis nulla quo ut dolores adipisci tempore numquam molestias aliquid vitae ipsum! Similique ad animi minima?'

        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web programing',
        // ]);
        // Post::create([
        //     'title' => "Judul Kedua",
        //     'slug' => 'judul kedua',
        //     'category_id' => 1,
        //     'author' => 'Sandika Galih',
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt exercitationem animi quod, ex tenetur nihil unde nam, obcaecati eveniet totam quibusdam iure quisquam natus eius eaque provident rerum recusandae expedita!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque qui modi eveniet architecto nobis aspernatur laboriosam voluptate eligendi laborum amet voluptatum in quos ducimus, possimus saepe fugit quisquam vitae sint ipsum nemo quasi, porro est! Provident molestias ex ipsum vitae error illum necessitatibus officiis assumenda expedita ab nisi corporis ratione unde, magni labore est aut fugiat eos quaerat perspiciatis neque, cumque sit praesentium? Totam, dolor! Quos cum eaque, totam excepturi neque consequatur odit architecto repudiandae asperiores quibusdam sapiente. Labore aperiam accusamus ipsam culpa doloremque, facilis nulla quo ut dolores adipisci tempore numquam molestias aliquid vitae ipsum! Similique ad animi minima?'

        // ]);
        // Post::create([
        //     'title' => "Judul ketiga",
        //     'slug' => 'judul ketiga',
        //     'category_id' => 2,
        //     'author' => 'Asep Saepuloh',
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt exercitationem animi quod, ex tenetur nihil unde nam, obcaecati eveniet totam quibusdam iure quisquam natus eius eaque provident rerum recusandae expedita!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque qui modi eveniet architecto nobis aspernatur laboriosam voluptate eligendi laborum amet voluptatum in quos ducimus, possimus saepe fugit quisquam vitae sint ipsum nemo quasi, porro est! Provident molestias ex ipsum vitae error illum necessitatibus officiis assumenda expedita ab nisi corporis ratione unde, magni labore est aut fugiat eos quaerat perspiciatis neque, cumque sit praesentium? Totam, dolor! Quos cum eaque, totam excepturi neque consequatur odit architecto repudiandae asperiores quibusdam sapiente. Labore aperiam accusamus ipsam culpa doloremque, facilis nulla quo ut dolores adipisci tempore numquam molestias aliquid vitae ipsum! Similique ad animi minima?'

        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // Post::create([
        //     'title' => "Judul keempat",
        //     'slug' => 'judul keempat',
        //     'category_id' => 2,
        //     'author' => 'Asep Saepuloh',
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt exercitationem animi quod, ex tenetur nihil unde nam, obcaecati eveniet totam quibusdam iure quisquam natus eius eaque provident rerum recusandae expedita!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque qui modi eveniet architecto nobis aspernatur laboriosam voluptate eligendi laborum amet voluptatum in quos ducimus, possimus saepe fugit quisquam vitae sint ipsum nemo quasi, porro est! Provident molestias ex ipsum vitae error illum necessitatibus officiis assumenda expedita ab nisi corporis ratione unde, magni labore est aut fugiat eos quaerat perspiciatis neque, cumque sit praesentium? Totam, dolor! Quos cum eaque, totam excepturi neque consequatur odit architecto repudiandae asperiores quibusdam sapiente. Labore aperiam accusamus ipsam culpa doloremque, facilis nulla quo ut dolores adipisci tempore numquam molestias aliquid vitae ipsum! Similique ad animi minima?'

        // ]);


        // Category::create([
        //     'name' => 'Akunting',
        //     'slug' => 'akunting'
        // ]);


        // User::create([
        //     'name' => 'Asep',
        //     'email' => 'asep@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // Post::create([
        //     'title' => "Judul Kelima",
        //     'slug' => 'judul Kelima',
        //     'category_id' => 2,
        //     'author' => 'Udin',
        //     'user_id' => 3,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt exercitationem animi quod, ex tenetur nihil unde nam, obcaecati eveniet totam quibusdam iure quisquam natus eius eaque provident rerum recusandae expedita!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque qui modi eveniet architecto nobis aspernatur laboriosam voluptate eligendi laborum amet voluptatum in quos ducimus, possimus saepe fugit quisquam vitae sint ipsum nemo quasi, porro est! Provident molestias ex ipsum vitae error illum necessitatibus officiis assumenda expedita ab nisi corporis ratione unde, magni labore est aut fugiat eos quaerat perspiciatis neque, cumque sit praesentium? Totam, dolor! Quos cum eaque, totam excepturi neque consequatur odit architecto repudiandae asperiores quibusdam sapiente. Labore aperiam accusamus ipsam culpa doloremque, facilis nulla quo ut dolores adipisci tempore numquam molestias aliquid vitae ipsum! Similique ad animi minima?'

        // ]);
      
    }
}
