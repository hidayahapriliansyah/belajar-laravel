<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     "name" => "Adi MF",
        //     "email" => "adi@gmail.com",
        //     "password" => bcrypt('12345')
        // ]);

        // User::create([
        //     "name" => "Hidayah",
        //     "email" => "hidayah@gmail.com",
        //     "password" => bcrypt('12345')
        // ]);

        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'excerpt pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus veniam a repudiandae impedit excepturi maxime aperiam consectetur expedita minima laboriosam dolorum enim laudantium tempora obcaecati, temporibus voluptatum magni? Quae.'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'excerpt kedua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus veniam a repudiandae impedit excepturi maxime aperiam consectetur expedita minima laboriosam dolorum enim laudantium tempora obcaecati, temporibus voluptatum magni? Quae.'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'excerpt ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus veniam a repudiandae impedit excepturi maxime aperiam consectetur expedita minima laboriosam dolorum enim laudantium tempora obcaecati, temporibus voluptatum magni? Quae.'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'excerpt keempat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus veniam a repudiandae impedit excepturi maxime aperiam consectetur expedita minima laboriosam dolorum enim laudantium tempora obcaecati, temporibus voluptatum magni? Quae.'
        // ]);
    }
}
