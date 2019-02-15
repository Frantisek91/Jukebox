@extends('layouts/app')

@section('title')
    show
@endsection


@section('content')

    <h1>show</h1>

    <h2>{{$author->name}}</h2>
    <br>
    <p>{{$author->name}}'s birthday is: <b>{{$author->date}}</b></p>
    <br>
    <img src="{{$author->picture}}" alt="#">
    <br>
    <h2>Biography</h2>
    <br>
    <p>{{$author->biography}}</p>

    <form action="/admin/author/{{$author->id}}" method="POST">
        @method('DELETE')
        @csrf
    <input type="submit" value="DELETE">
</form>
    
    <a href="/admin">Home</a>
@endsection