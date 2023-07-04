<?php

namespace App\Models\Screencast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'thumbnail', 'slug'];

    public function getPictureAttribute()
    {
<<<<<<< HEAD
        return asset('storage/'.$this->thumbnail);
=======
        return asset('storage' . $this->thumbnail);
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
