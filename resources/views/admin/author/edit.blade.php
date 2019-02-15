@extends('layouts/app')

@section('title')
    edit author
@endsection


@section('content')

    <h1>edit</h1>

    <form action="/admin/author/{{$author->id}}" method="POST">

        @method('PUT')
        @csrf
        
        <input type="text" name="name" value="{{$author->name}}"> <br>

        <input type="text" name="date" value="{{$author->date}}"> <br>

        <input type="text" name="picture" value="{{$author->picture}}"> <br>
        
        <textarea name="biography" id="" cols="30" rows="10"> 
            {{$author->biography}}
        </textarea><br>

        <input type="submit" value="Edit">
    
    </form>
<br>
<a href="/admin">Dashboard</a>

@endsection