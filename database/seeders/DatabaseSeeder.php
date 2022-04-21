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
        

        // User::create([
        //     'name' => 'Rizki Sahat',
        //     'email' => 'rizkisahat@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Fera Kurniawan',
        //     'email' => 'feraa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);



        User::factory(3)->create();

        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'Gaming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'exert' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur explicabo consectetur odio facilis quis dolorem itaque nesciunt, laborum adipisci dolores?</p>',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem harum tenetur ratione? Officiis exercitationem, minus nobis rerum consequuntur ducimus culpa provident quae quos odio ea expedita qui totam sint eius modi? Quaerat nihil, porro officia sint inventore magnam reiciendis pariatur assumenda dolore fugit possimus ea obcaecati odit. Ea, velit assumenda?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta ratione dolorem et enim quisquam commodi quos odit laudantium, culpa ducimus nulla asperiores ipsum voluptate dolore sequi molestias qui facilis incidunt officia doloremque maiores nemo aut. Id eligendi quis nulla, animi tempore quod totam odit. Animi libero pariatur hic voluptatum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nostrum odio earum laborum eaque aut facilis sequi assumenda, corrupti, natus esse qui? Officiis, saepe! Odit atque, quisquam, voluptas voluptates a vitae suscipit nostrum eligendi officiis aperiam molestiae totam mollitia iste inventore cum, nulla optio provident ipsum hic! Rerum, tempora expedita!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-ke-dua',
        //     'exert' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur explicabo consectetur odio facilis quis dolorem itaque nesciunt, laborum adipisci dolores?</p>',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem harum tenetur ratione? Officiis exercitationem, minus nobis rerum consequuntur ducimus culpa provident quae quos odio ea expedita qui totam sint eius modi? Quaerat nihil, porro officia sint inventore magnam reiciendis pariatur assumenda dolore fugit possimus ea obcaecati odit. Ea, velit assumenda?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta ratione dolorem et enim quisquam commodi quos odit laudantium, culpa ducimus nulla asperiores ipsum voluptate dolore sequi molestias qui facilis incidunt officia doloremque maiores nemo aut. Id eligendi quis nulla, animi tempore quod totam odit. Animi libero pariatur hic voluptatum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nostrum odio earum laborum eaque aut facilis sequi assumenda, corrupti, natus esse qui? Officiis, saepe! Odit atque, quisquam, voluptas voluptates a vitae suscipit nostrum eligendi officiis aperiam molestiae totam mollitia iste inventore cum, nulla optio provident ipsum hic! Rerum, tempora expedita!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'exert' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur explicabo consectetur odio facilis quis dolorem itaque nesciunt, laborum adipisci dolores?</p>',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem harum tenetur ratione? Officiis exercitationem, minus nobis rerum consequuntur ducimus culpa provident quae quos odio ea expedita qui totam sint eius modi? Quaerat nihil, porro officia sint inventore magnam reiciendis pariatur assumenda dolore fugit possimus ea obcaecati odit. Ea, velit assumenda?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta ratione dolorem et enim quisquam commodi quos odit laudantium, culpa ducimus nulla asperiores ipsum voluptate dolore sequi molestias qui facilis incidunt officia doloremque maiores nemo aut. Id eligendi quis nulla, animi tempore quod totam odit. Animi libero pariatur hic voluptatum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nostrum odio earum laborum eaque aut facilis sequi assumenda, corrupti, natus esse qui? Officiis, saepe! Odit atque, quisquam, voluptas voluptates a vitae suscipit nostrum eligendi officiis aperiam molestiae totam mollitia iste inventore cum, nulla optio provident ipsum hic! Rerum, tempora expedita!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-ke-empat',
        //     'exert' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur explicabo consectetur odio facilis quis dolorem itaque nesciunt, laborum adipisci dolores?</p>',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem harum tenetur ratione? Officiis exercitationem, minus nobis rerum consequuntur ducimus culpa provident quae quos odio ea expedita qui totam sint eius modi? Quaerat nihil, porro officia sint inventore magnam reiciendis pariatur assumenda dolore fugit possimus ea obcaecati odit. Ea, velit assumenda?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta ratione dolorem et enim quisquam commodi quos odit laudantium, culpa ducimus nulla asperiores ipsum voluptate dolore sequi molestias qui facilis incidunt officia doloremque maiores nemo aut. Id eligendi quis nulla, animi tempore quod totam odit. Animi libero pariatur hic voluptatum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nostrum odio earum laborum eaque aut facilis sequi assumenda, corrupti, natus esse qui? Officiis, saepe! Odit atque, quisquam, voluptas voluptates a vitae suscipit nostrum eligendi officiis aperiam molestiae totam mollitia iste inventore cum, nulla optio provident ipsum hic! Rerum, tempora expedita!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
