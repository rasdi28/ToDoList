@extends('layout.master')

@section('title', $post->title)

@section('content')
    <div class="container">
        <h1> {{ $post->title }} </h1>
        <p>{{ $post->body }}</p>
    
        <div>
           <form action="/posts/{{ $post->slug }}/delete" method="post">
            @csrf
            @method("delete")
            <button class="btn btn-sm btn-danger" type="submit">Delete</button>

        </form>
        </div>
    
    </div>

@endsection