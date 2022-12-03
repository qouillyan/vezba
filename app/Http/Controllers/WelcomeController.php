<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->limit(3)->get();
        return view('welcome.index', compact('posts'));
    }
}
