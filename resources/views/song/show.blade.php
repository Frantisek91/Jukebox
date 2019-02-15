@extends('layouts/app')

@section('title')
    show
@endsection


@section('content')
    <h1>show</h1>

    <h2>{{$song->name}}</h2>
    <p>The author is: {{$song->author}}</p>
    <p>the yourube ccode is: {{$song->code}}</p>
@endsection