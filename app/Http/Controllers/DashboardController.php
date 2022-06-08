<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $posts = Post::all();
        $users = User::all();
        return view('dashboard.index',[
            'posts' => $posts,
            'users' => $users,
        ]);
    }
}
