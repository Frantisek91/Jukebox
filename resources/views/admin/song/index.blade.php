@extends('layouts/app')

@section('title')
    index
@endsection


@section('content')
<ul>
    <li><a href="/admin/song">All Songs</a></li>
    <li><a href="/admin/song/create">Create Song</a></li>
    <li><a href="/admin">Dashboard</a></li>
</ul>
<h1>index</h1>

<table>
    <tr>
        <th>Song Name</th>
        <th>Song Author</th>
        <th>Visit</th>
    </tr>
    @foreach ($songs as $song)
        <tr>
            <td>{{$song->name}}</td>
            <td>{{$song->author}}</td>
            <td><a href="/admin/song/{{$song->id}}">Check it Out</a></td>
        </tr>
    @endforeach
</table>

@endsection