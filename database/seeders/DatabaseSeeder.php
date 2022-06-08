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
            'nis' => '123456789000',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'jenis_kelamin' => 'pria',
            'alamat'=>'jl. kenanga',
            'kelas'=>'6',
            'nomor_hp' => '086969123123',
            'tgl_lahir'=> '1985-09-17',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
     
        User::factory(8)->create();

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
