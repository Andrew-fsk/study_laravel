<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 0)->get();
        dd($posts);
    }

    public function create()
    {

    }
}
