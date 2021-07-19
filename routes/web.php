<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
        Route::get('/', 'DashboardController@index')->name('/');

        // Artist
        Route::get('artist', 'ArtistController@index')->name('artist');
        Route::get('artist/create', 'ArtistController@create')->name('artist.create');
        Route::post('artist', 'ArtistController@store')->name('artist.store');
        Route::get('artist/edit/{artist}', 'ArtistController@edit')->name('artist.edit');
        Route::put('artist', 'ArtistController@update')->name('artist.update');
        Route::delete('artist', 'ArtistController@delete')->name('artist.delete');

        // Album
        Route::get('album', 'AlbumController@index')->name('album');
        Route::get('album/create', 'AlbumController@create')->name('album.create');
        Route::post('album', 'AlbumController@store')->name('album.store');
        Route::get('album/edit/{album}', 'AlbumController@edit')->name('album.edit');
        Route::put('album', 'AlbumController@update')->name('album.update');
        Route::delete('album', 'AlbumController@delete')->name('album.delete');

        // Track
        Route::get('track', 'TrackController@index')->name('track');
        Route::get('track/create', 'TrackController@create')->name('track.create');
        Route::post('track', 'TrackController@store')->name('track.store');
        Route::get('track/edit/{track}', 'TrackController@edit')->name('track.edit');
        Route::put('track', 'TrackController@update')->name('track.update');
        Route::delete('track', 'TrackController@delete')->name('track.delete');

        // Track
        Route::get('played', 'PlayedController@index')->name('played');
        Route::get('played/create', 'PlayedController@create')->name('played.create');
        Route::post('played', 'PlayedController@store')->name('played.store');
        Route::get('played/edit/{played}', 'PlayedController@edit')->name('played.edit');
        Route::put('played', 'PlayedController@update')->name('played.update');
        Route::delete('played', 'PlayedController@delete')->name('played.delete');
    });
});
