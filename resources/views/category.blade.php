@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> Post Category : {{ $category }}</h1>

    {{-- @foreach ($post as $poss) --}}
    <article class="mb-5">
    <h2><a href="/posts/{{ $slug }}">{{ $title }}</a> </h2>
    {!! $exert !!}
    </article>
    {{-- @endforeach --}}

@endsection

