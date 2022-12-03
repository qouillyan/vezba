@extends('layouts.master')

@section('title', $post->title)

@section('content')

<h1>{{ $post->title }}</h1>

<p>{{ $post->created_at }}</p>

<p>{{ $post->body }}</p>

<p>
    <a href="{{ route('single-user', ['id' => $post->user->id]) }}">
        {{ $post->user->name }}
    </a>
</p>

<h3>Comments</h3>

    @foreach($post->comments as $comment)
        
        <ul>
            <li>{{ $comment }}</li>
        </ul>

    @endforeach
       
@endsection