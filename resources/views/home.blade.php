@extends('layouts.main')

@section('container')
    <h1>Halaman Home</h1>
@auth
    <h3>Halo {{ auth()->user()->name }}, Selamat Datang Kembali</h3>
@endauth
@endsection