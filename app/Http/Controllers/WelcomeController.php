<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('users')->latest()->limit(5);
        return view('welcome.index', compact('posts'));
    }
}
