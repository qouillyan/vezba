@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

    <br>

    <h2>Latest Posts</h2>

    @foreach($posts as $post)

        <br>

        <div class="blog-post">

            <a href="{{ route('single-post', ['id' => $post->id]) }}">
                <h3 class="blog-post-title">{{ $post->title }}</h3>
            </a>

                <p class="blog-post-meta">{{ $post->created_at }} by
                <a href="{{ route('single-user', ['id' => $post->user->id]) }}">
                    {{ $post->user->name }}</p>
                </a>

            <p>{{ $post->body }}</p>
        
        </div>

    @endforeach
    
@endsection
