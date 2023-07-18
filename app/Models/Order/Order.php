<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['playlists_ids', 'order_identifier', 'total'];

    protected $casts = [
        'playlists_ids' => 'array'
    ];
}
