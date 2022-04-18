<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Rizki Sahat",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Doloremque asperiores, quibusdam enim, voluptatem deserunt libero 
        nesciunt nemo qui labore dolorem, reiciendis perferendis. Neque eos 
        exercitationem excepturi amet velit id reprehenderit facere quibusdam 
        esse? Iste explicabo tenetur expedita, modi nostrum minus nihil mollitia 
        consectetur omnis itaque, sed saepe atque voluptatem inventore harum quas 
        vitae laboriosam. Corporis non voluptatum inventore, dolore nisi impedit enim ipsa 
        cumque minima blanditiis vitae reiciendis quisquam dolorem repellendus rerum deleniti 
        eligendi nam odio et accusantium nihil. Dolorum!"
    ],
    [
        "title" => "Judul Post Jagurduk",
        "slug" => "judul-post-kedua",
        "author" => "Jagurduk Sibagariang",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt expedita 
        magni voluptatibus saepe deleniti non sint suscipit molestiae, sit, est consequuntur 
        vitae ea rem at eveniet? Porro esse reiciendis, aliquid doloribus in consequuntur tempora 
        doloremque labore, molestias excepturi suscipit assumenda omnis ullam exercitationem odio 
        illo. Exercitationem delectus, dicta illum sunt dolores tenetur praesentium nobis perspiciatis 
        voluptas iusto ipsa nihil iste, excepturi asperiores placeat aliquam magnam dolorum et ducimus 
        tempora optio quos maxime aliquid. Consequatur, sed? Porro repudiandae saepe consequuntur voluptatem 
        velit necessitatibus doloremque repellat, hic laboriosam dolor perspiciatis id nobis nulla 
        perferendis tenetur fuga, veritatis sed aut assumenda illo voluptas!"
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

