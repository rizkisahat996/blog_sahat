@extends('dashboard.layouts.main')

@section('container')
<div>
<h1 class="text-light">Halo {{ auth()->user()->name }}, apa cerita?</h1>
</div>
@endsection