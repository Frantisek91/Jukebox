@extends('layouts/app')

@section('title')
    Home
@endsection


@section('content')
<ul>
    <li><a href="/admin/song">All Songs</a></li>
    <li><a href="/admin/song/create">Create Song</a></li>
    <li><a href="/admin/author">All Authors</a></li>
</ul>
@endsection