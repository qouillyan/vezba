<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
// use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    // public function store(StorePostRequest $request)
    // {
        
    //     Post::create([
    //         'title' => request('title'),
    //         'body' => request('body'),
    //     ]);

    //     return redirect('/posts');
    // }
}
