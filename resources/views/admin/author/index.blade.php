@extends('layouts/app')


@section('title')
    All Authors
@endsection

@section('content')
<table>
    <tr>
        <th>Author Name</th>
        <th>Author Birthday</th>
        <th>Click</th>
    </tr>
    @foreach ($authors as $author)
        <tr>
            <td>{{$author->name}}</td>
            <td>{{$author->date}}</td>
            <td><a href="/admin/author/{{$author->id}}">Check it Out</a></td>
        </tr>
    @endforeach
</table>
@endsection