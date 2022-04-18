@extends('layouts.main')

@section('container')
    <h1>Halaman Home</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $nim }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle">
@endsection