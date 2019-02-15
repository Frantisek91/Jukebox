@extends('layouts/app')

@section('title')
    create
@endsection


@section('content')


    <h1>create</h1>

    <form action="/admin/song" method="post">

        @csrf
        
        <input type="text" name="name" placeholder="Name"> <br>

        <input type="text" name="author" placeholder="Author"> <br>

        <input type="text" name="code" placeholder="Youtube Code"> <br>   

        <input type="submit" value="Submit">
    
    </form>
<br>
<a href="/admin">Dashboard</a>

@endsection