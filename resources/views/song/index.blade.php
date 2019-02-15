@extends('layouts/app')

@section('title')
    index
@endsection


@section('content')
    <h1>index</h1>
<ol>
    @foreach ($songs as $song)
        <li> <a href=""> {{$song->name}} </a></li>
    @endforeach
</ol>

@endsection