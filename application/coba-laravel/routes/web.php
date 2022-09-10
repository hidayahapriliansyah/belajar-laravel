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

Route::get('/blog', [PostController::class, 'index']);

// Route untuk single post
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => "Category : $category->name",
        "category" => $category->name,
        "posts" => $category->post
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
        "title" => "Categories",
        "categories" => Category::all()
    ]);
});

Route::get('/author', function() {
    return view('authors', [
        "title" => "Author",
        "authors" => User::all()
    ]);
});

Route::get('/author/{user:id}', function(User $user) {
    return view('author', [
        "title" => "Author",
        "author" => $user,
        "posts" => $user->posts
    ]);
});