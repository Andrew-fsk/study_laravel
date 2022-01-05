<?php


namespace App\Http\Controllers\Admin;


use App\Models\Post;

class IndexController
{
    public function __invoke()
    {
        $all_posts = Post::all()->count();

        return view('admin.index', compact('all_posts'));
    }
}
