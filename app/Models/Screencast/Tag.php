<?php

namespace App\Models\Screencast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $guarded = [];

=======
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
    public function playlists()
    {
        return $this->belongsToMany(Playlist::class);
    }
}
