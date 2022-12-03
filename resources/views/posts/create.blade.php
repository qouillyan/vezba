@extends('layouts.master')

@section('title', 'Submit')

@section('content')

    <br>

    <h3>Submit a post</h3>

    <form method="POST" action="/posts">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label><br>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>

        @error('title')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label for="body" class="form-label">Body</label><br>
            <textarea name="body" id="body" class="form-control" rows="3" placeholder="Content"></textarea>
        </div>

        @error('body')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>
    
@endsection