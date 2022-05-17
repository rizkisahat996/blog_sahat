@extends('layouts.main')

@section('container')
    <h1>Halaman Aboutnya Bro</h1>
    @auth
    <p>Nama = {{ auth()->user()->name }}</p>
    @endauth
@endsection
