<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about',  [
        "title" => "About",
        "name" => "Adi Muhamad Firmansyah",
        "email" => "adi@gmail.com",
        "image" => "adi.jpg"
    ]);
});

Route::get('/blog', function() {
    return view('posts', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

// Route untuk single post
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => "Category : $category->name",
        "category" => $category->name,
        "posts" => $category->post
    ]);
});