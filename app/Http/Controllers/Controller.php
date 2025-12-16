<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller; // 🔴 PENTING

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
