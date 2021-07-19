<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Played, Track, Artist, Album};

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $played = Played::orderBy('id', 'desc');
        $played = $played->paginate(10);

        $skipped = ($played->perPage() * $played->currentPage()) - $played->perPage();

        return view('apps.played.index')->with('played', $played)->with('skipped', $skipped);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artist = Artist::orderBy('name', 'asc')->get();
        $album = Album::orderBy('name', 'asc')->get();
        $track = Track::orderBy('name', 'asc')->get();
        return view('apps.played.create')->with('artist', $artist)
                                        ->with('album', $album)
                                        ->with('track', $track);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Played::create($request->all());
        return redirect()->route('admin.played');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(played $played)
    {
        $artist = Artist::orderBy('name', 'asc')->get();
        $album = Album::orderBy('name', 'asc')->get();
        $track = Track::orderBy('name', 'asc')->get();
        return view('apps.played.edit')->with('played', $played)
                                      ->with('album', $album)
                                      ->with('artist', $artist)
                                      ->with('track', $track);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $played = Played::findOrFail($request->id);

        $played->update($request->all());

        return redirect()->route('admin.played');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $played = Played::findOrFail($request->id);

        $played->delete();

        return redirect()->back();  
    }
}
