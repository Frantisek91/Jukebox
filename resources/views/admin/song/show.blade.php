@extends('layouts/app')

@section('title')
    show
@endsection


@section('content')

    <h1>show</h1>

    <h2>{{$song->name}}</h2>
    <p>The author is: {{$song->author}}</p>
    <p>the yourube ccode is: {{$song->code}}</p> <br>
    <a href="/admin/song/{{$song->id}}/edit">EDIT ME!</a> <br>
    
    <form action="/admin/song/{{$song->id}}" method="POST">
            @method('DELETE')
            @csrf
        <input type="submit" value="DELETE">
    </form>
    <br>
    <a href="/admin">Dashboard</a>
@endsection