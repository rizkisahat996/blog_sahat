@extends('layouts.main')

@section('container')
    <h1>Halaman Aboutnya Bro</h1>
    <p>nama = {{ $nama }}</p>
    <p>nim = {{ $nim }}</p>
    <p>hobi = {{ $hobi }}</p>
    <p>asal sma = {{ $asalSma }}</p>
    <p>alasan masuk ti = {{ $alasanmasukti }}</p>
    <p>teknologi yang dikuasai = {{ $teknologiyangdikuasai }}</p>
    <img src="img/{{ $icon }}" alt="namaa" width="300" class="img-thumbnail rounded-circle">
@endsection
