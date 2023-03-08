<?php

namespace App\Http\Controllers\Screencast;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Screencast\Playlist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PlaylistRequest;

class PlaylistController extends Controller
{
    public function create()
    {
        return view('playlist.create');
    }

    public function store(PlaylistRequest $request)
    {

        Auth::user()->playlists()->create([
            'thumbnail' => $request->file('thumbnail')->store('images/playlist'),
            'name' => $request->name,
            'slug' => Str::slug($request->name . '-' . Str::random(6)),
            'price' => $request->price,
            'description' => $request->description
        ]);

        return back();
    }

    public function table()
    {
        $playlists = Auth::user()->playlists()->latest()->paginate(10);

        return view('playlist.table', compact('playlists'));
    }

    public function edit(Playlist $playlist)
    {
        return view('playlist.edit', compact('playlist'));
    }
}
