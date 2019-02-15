@extends('layouts/app')

@section('title')
    New author 
@endsection


@section('content')


    <h1>Add new author</h1>

    <form action="/admin/author" method="post">

        @csrf
        
        <input type="text" name="name" placeholder="Name"> <br>
        
        <input type="text" name="date" placeholder="Date of birth"> <br>

        <textarea name="biography" id="" cols="30" rows="10">

        </textarea><br>

        <input type="submit" value="Submit">
    
    </form>
<br>
<a href="/admin">Dashboard</a>

@endsection