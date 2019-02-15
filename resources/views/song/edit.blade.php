@extends('layouts/app')

@section('title')
    edit
@endsection


@section('content')
    <h1>edit</h1>

    <form action="/song/{{$song->id}}" method="POST">

        @method('PUT')
        @csrf
        
        <input type="text" name="name" value="{{$song->name}}"> <br>

        <input type="text" name="author" value="{{$song->author}}"> <br>

        <input type="text" name="code" value="{{$song->code}}"> <br>   

        <input type="submit" value="Edit">
    
    </form>

@endsection