<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('front.blog.blog', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('front.blog.show', compact('post'));
    }
}
