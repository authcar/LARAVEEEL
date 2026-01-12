<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
    // validasi sederhana
        $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        ]);
        // simpan ke database
        Post::create([
        'title' => $request->title,
        'content' => $request->content,
        ]);
        // redirect ke halaman index
        return redirect()->route('posts.index')
        ->with('success', 'Post berhasil
        ditambahkan');
    }
}

