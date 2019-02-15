@extends('layouts/app')


@section('title')
    All Songs
@endsection

@section('content')
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
            <td><a href="/user/song/{{$song->id}}">Check it Out</a></td>
        </tr>
    @endforeach
</table>
@endsection