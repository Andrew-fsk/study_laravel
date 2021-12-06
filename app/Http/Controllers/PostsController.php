<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        return view('posts/posts', compact('posts'));
    }

    public function create()
    {
        return view('posts/create_post');
    }
}
