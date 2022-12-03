@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

    

    @foreach($posts as $post)
        Jebem ti mamu
        <div class="blog-post">

            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at }} by {{ $post->user->name }}</p>

            <p>{{ $post->body }}</p>
        
        </div>

    @endforeach
    
@endsection
