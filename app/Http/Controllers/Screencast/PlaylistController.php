<?php

namespace App\Http\Controllers\Screencast;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Screencast\Tag;
use App\Models\Screencast\Playlist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PlaylistRequest;
use Illuminate\Support\Facades\Storage;

class PlaylistController extends Controller
{
    public function table()
    {
        $playlists = Auth::user()->playlists()->latest()->paginate(10);

        return view('playlist.table', compact('playlists'));
    }

    public function create()
    {
        return view('playlist.create', [
            'playlist' => new Playlist,
            'tags' => Tag::get()
        ]);
    }

    public function store(PlaylistRequest $request)
    {
        $playlist = Auth::user()->playlists()->create([
            'thumbnail'     => $request->file('thumbnail')->store('images/playlist', 'public'),
            'name'          => $request->name,
            'slug'          => Str::slug($request->name . '-' . Str::random(6)),
            'price'         => $request->price,
            'description'   => $request->description
        ]);

        $playlist->tags()->sync(request('tags'));

        return back();
    }

    public function edit(Playlist $playlist)
    {
        return view('playlist.edit', [
            'playlist' => $playlist,
            'tags' => Tag::get()
        ]);
    }

    public function update(Request $request, Playlist $playlist)
    {
        if ($request->thumbnail) {
            Storage::delete($playlist->thumbnail);
            $thumbnail = $request->file('thumbnail')->store('images/playlist', 'public');
        }else{
            $thumbnail =$playlist->thumbnail;
        }

        $playlist->update([
            'thumbnail' => $thumbnail,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        $playlist->tags()->sync(request('tags'));

        return redirect(route('playlists.table'));
    }

    public function destroy(Playlist $playlist)
    {
        Storage::delete($playlist->thumbnail);
        $playlist->tags()->detach();
        $playlist->delete();
        return redirect(route('playlists.table'));
    }
}
