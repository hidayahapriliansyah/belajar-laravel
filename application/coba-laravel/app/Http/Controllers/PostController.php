<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'))->name;
            $title = ' in ' . $category;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'))->name;
            $title = ' by ' . $author;
        }

        return view('posts', [
            "title" => "Blog All Post" . $title,
            "active" => "blog",
            "category" => Category::all()->where('slug', request('category'))->first(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => $post["title"],
            "active" => "blog",
            "post" => $post,
        ]);
    }
}
