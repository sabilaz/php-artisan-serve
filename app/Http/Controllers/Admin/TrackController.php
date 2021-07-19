<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Track, Artist, Album};
class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $track = Track::orderBy('id', 'desc');
        $track = $track->paginate(10);

        $skipped = ($track->perPage() * $track->currentPage()) - $track->perPage();

        return view('apps.track.index')->with('track', $track)->with('skipped', $skipped);
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
        return view('apps.track.create')->with('artist', $artist)
                                        ->with('album', $album);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Track::create($request->all());
        return redirect()->route('admin.track');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        $artist = Artist::orderBy('name', 'asc')->get();
        $album = Album::orderBy('name', 'asc')->get();
        return view('apps.track.edit')->with('track', $track)
                                      ->with('album', $album)
                                      ->with('artist', $artist);
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
        $track = Track::findOrFail($request->id);

        $track->update($request->all());

        return redirect()->route('admin.track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $track = Track::findOrFail($request->id);

        $track->delete();

        return redirect()->back();  
    }
}
