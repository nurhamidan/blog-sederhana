<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'Programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        User::create([
            'name' => 'Agung Nurhamidan',
            'email' => 'agungnurhamidan@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Fulan Gaminx',
            'email' => 'fulan@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Ini Judul Pertama',
            'slug' => 'ini-judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus lauda...',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus laudantium exercitationem eum quos. Enim nemo explicabo error odit et veritatis quas maiores dolorem! Autem architecto non sint maxime dolore quas aliquam quo omnis veniam nisi, minus sed fugit necessitatibus labore eos suscipit eligendi quaerat earum ullam recusandae? Officia, explicabo eaque similique voluptatum adipisci blanditiis molestias rerum eos, praesentium consequuntur magni reprehenderit cum cumque expedita quibusdam qui pariatur voluptatem sint alias aliquam itaque! Ab velit sapiente molestias voluptas, dolorem sint incidunt doloremque ut reprehenderit minima, facere, error qui ipsa! Voluptate ipsa ullam at. Voluptates!'
        ]);
        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Ini Judul Kedua',
            'slug' => 'ini-judul-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus lauda...',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus laudantium exercitationem eum quos. Enim nemo explicabo error odit et veritatis quas maiores dolorem! Autem architecto non sint maxime dolore quas aliquam quo omnis veniam nisi, minus sed fugit necessitatibus labore eos suscipit eligendi quaerat earum ullam recusandae? Officia, explicabo eaque similique voluptatum adipisci blanditiis molestias rerum eos, praesentium consequuntur magni reprehenderit cum cumque expedita quibusdam qui pariatur voluptatem sint alias aliquam itaque! Ab velit sapiente molestias voluptas, dolorem sint incidunt doloremque ut reprehenderit minima, facere, error qui ipsa! Voluptate ipsa ullam at. Voluptates!'
        ]);
        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'Ini Judul Ketiga',
            'slug' => 'ini-judul-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus lauda...',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus laudantium exercitationem eum quos. Enim nemo explicabo error odit et veritatis quas maiores dolorem! Autem architecto non sint maxime dolore quas aliquam quo omnis veniam nisi, minus sed fugit necessitatibus labore eos suscipit eligendi quaerat earum ullam recusandae? Officia, explicabo eaque similique voluptatum adipisci blanditiis molestias rerum eos, praesentium consequuntur magni reprehenderit cum cumque expedita quibusdam qui pariatur voluptatem sint alias aliquam itaque! Ab velit sapiente molestias voluptas, dolorem sint incidunt doloremque ut reprehenderit minima, facere, error qui ipsa! Voluptate ipsa ullam at. Voluptates!'
        ]);
        Post::create([
            'category_id' => 3,
            'user_id' => 2,
            'title' => 'Ini Judul Keempat',
            'slug' => 'ini-judul-keempat',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus lauda...',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque consequatur doloremque neque placeat facilis possimus laudantium exercitationem eum quos. Enim nemo explicabo error odit et veritatis quas maiores dolorem! Autem architecto non sint maxime dolore quas aliquam quo omnis veniam nisi, minus sed fugit necessitatibus labore eos suscipit eligendi quaerat earum ullam recusandae? Officia, explicabo eaque similique voluptatum adipisci blanditiis molestias rerum eos, praesentium consequuntur magni reprehenderit cum cumque expedita quibusdam qui pariatur voluptatem sint alias aliquam itaque! Ab velit sapiente molestias voluptas, dolorem sint incidunt doloremque ut reprehenderit minima, facere, error qui ipsa! Voluptate ipsa ullam at. Voluptates!'
        ]);
    }
}
