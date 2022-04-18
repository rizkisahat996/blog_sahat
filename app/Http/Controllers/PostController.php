<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return  view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);

    }
    public function showCat()
    {
        return view('category', [
            "category" => Category::all()
        ]);

    }

}
