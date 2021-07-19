<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Artist, Album};

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::orderBy('id', 'desc');
        $album = $album->paginate(10);

        $skipped = ($album->perPage() * $album->currentPage()) - $album->perPage();

        return view('apps.album.index')->with('album', $album)
                                       ->with('skipped', $skipped);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artist = Artist::orderBy('id', 'desc')->get();
        return view('apps.album.create')->with('artist', $artist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect()->route('admin.album');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $artist = Artist::orderBy('id', 'desc')->get();
        return view('apps.album.edit')
                            ->with('artist', $artist)
                            ->with('album', $album);
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
        $album = Album::findOrFail($request->id);
        $album->update($request->all());

        return redirect()->route('admin.album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $album = Album::findOrFail($request->id);
        $album->delete();

        return redirect()->route('admin.album');
    }
}
