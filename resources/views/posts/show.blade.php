@extends('layouts.master')

@section('title', $post->title)

@section('content')

<br>

<h1>{{ $post->title }}</h1>

<p>{{ $post->created_at }} by 
    <a href="{{ route('single-user', ['id' => $post->user->id]) }}">
        {{ $post->user->name }}
    </a>
</p>

<br>

<p>{{ $post->body }}</p>

    <br>

    <hr class="col-xs-12">

        <form method="POST" action="/posts/{{ $post->id }}/comments">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Comment:</label>
                <input type="text" name="body" class="form-control" id="title" placeholder="Comment">
            </div>

            @error('body')
                @include('partials.error')
            @enderror

                <button type="submit" class="btn btn-primary mt-3">Send comment</button>

        </form>
    
    <br>

    <h3>Comments</h3>

    @foreach($post->comments as $comment)
        
        <p>[ {{ $comment->user->name }} ]: {{ $comment->body }}</p>

    @endforeach
       
@endsection