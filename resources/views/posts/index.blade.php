@extends('layouts.master')

@section('title', 'Posts')

@section('content')

<h1>Posts</h1>

    @foreach ($posts as $post)

        <ul>
            <li><a href="{{ route('single-post', ['id' => $post->id]) }}">
                {{ $post->created_at }} - {{ $post->title }}
            </a></li>
        </ul>

    @endforeach
    
@endsection