@extends('layouts/app')

@section('title')
    show
@endsection


@section('content')

    <h1>show</h1>

    <h2>{{$song->name}}</h2>
    <p>The author is: <b>{{$song->author}}</b></p>
    <br>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$song->code}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <br>
    <a href="/user">Home</a>
@endsection