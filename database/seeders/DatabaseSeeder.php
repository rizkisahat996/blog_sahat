<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
     
        User::factory(3)->create();

        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'Gaming'
        ]);

        Category::create([
            'name' => 'Gambling',
            'slug' => 'gambling'
        ]);

        Post::factory(20)->create();

    }
}
