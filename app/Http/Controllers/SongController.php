<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //$songs is varbiable defined by us and we tell it to take values from Song model and order them by criteria "created at" and descendant
        $songs = Song::all();
    // return the view song/view that was defined and add compact function   
        return view('/admin/song/index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/song/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'code' => 'required'
        ]);

        Song::create(request(['name', 'author', 'code']));

        return redirect('admin')->with('success', 'Song Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('/admin/song/show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        
        return view('/admin/song/edit', compact('song'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'code' => 'required'
        ]);

        $song->update(request(['name', 'author', 'code']));

        return redirect('admin')->with('success', 'Song Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
        $song->delete();

        return redirect('admin')->with('success', 'Song Deleted');
    }
}
