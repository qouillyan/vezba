@extends('layouts.master')

@section('title', $post->title)

@section('content')

<h1>{{ $post->title }}</h1>

<p>{{ $post->created_at }}</p>

<p>{{ $post->body }}</p>

<p>{{ $post->user->name }}</p>
       
@endsection