<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [ 'except' => 'index' ]);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments', 'comments.user')->find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $request->validated();
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);
        $request = request();
        return redirect('/posts');
    }
}
