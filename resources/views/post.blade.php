@extends('layouts.main')

@section('container')
    <h2 class="mb-5">{{ $post["title"] }}</h2>
    
    <p>by. Rizki Sahat in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
    
    <a href="/posts">Back to Post</a>
@endsection

