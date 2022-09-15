<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function() {
    return view('about',  [
        "title" => "About",
        "active" => "about",
        "name" => "Adi Muhamad Firmansyah",
        "email" => "adi@gmail.com",
        "image" => "adi.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Route untuk single post
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        "title" => "Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         "title" => "Post by Category : $category->name",
//         "active" => "categories",
//         "posts" => $category->post->load(['author', 'category'])
//     ]);
// });


// author route

Route::get('/author', function() {
    return view('authors', [
        "title" => "Author",
        "active" => "blog",
        "authors" => User::all()
    ]);
});

// Route::get('/author/{author:username}', function(User $author) {
//     return view('posts', [
//         "title" => "Post by author : $author->name",
//         "active" => "blog",
//         "author" => $author,
//         "posts" => $author->posts->load(['author', 'category'])
//     ]);
// });