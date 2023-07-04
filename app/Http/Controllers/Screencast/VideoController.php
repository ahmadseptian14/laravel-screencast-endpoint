<?php

namespace App\Http\Controllers\Screencast;

use App\Http\Controllers\Controller;
use App\Models\Screencast\Playlist;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create(Playlist $playlist) 
    {
        dd($playlist);
    }
}
