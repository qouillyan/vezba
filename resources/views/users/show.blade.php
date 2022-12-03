@extends('layouts.master')

@section('title', $user->name)

@section('content')

<br>

<h1>{{ $user->name }}</h1>

<p>{{ $user->email }}</p>

@foreach($user->posts as $post)

    <ul>
        <li><a href="{{ route('single-post', ['id' => $post->id]) }}">
            {{ $post->created_at }} - {{ $post->title }}
        </a></li>   
    </ul>

@endforeach
       
@endsection