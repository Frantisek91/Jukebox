<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $songs = Song::all();

        return view('/user/home', compact('songs'));
    }

    public function show(Song $song)
    {
        return view('/user/song/show', compact('song'));
    }
}
