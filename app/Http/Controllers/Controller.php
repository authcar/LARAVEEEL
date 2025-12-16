<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; // 🔴 PENTING

class Controller extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
