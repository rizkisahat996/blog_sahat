<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MajalahController extends Controller
{
    public function index()
    {
        $post = Post::get();

        return view('majalah.index');
    }
}
