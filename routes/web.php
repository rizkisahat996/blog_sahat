<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
        "name" => "Rizki Sahat",
        "nim" => "211402030",
        "image" => "sahat.jpg",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "nama" => "Rizki Sahat Arapenta",
        "nim" => "211402030",
        "hobi" => "makan",
        "asalSma" => "primbana",
        "alasanmasukti" => "biar dapet laptop gaming",
        "teknologiyangdikuasai" => "windows explorer",
        "icon" => "namaa.png"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "whatsapp" => "083115630741"
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});




Route::get('/posts', [PostController::class, 'index']);


//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);



// Route::get('/categories/{category:slug}', function(Category $category)
// {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->post->load('author', 'category')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->post->load('category', 'author'),
//     ]);
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class);