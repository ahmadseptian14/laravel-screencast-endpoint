<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Models\Screencast\Playlist;
use App\Http\Controllers\Controller;
use App\Http\Resources\Order\CartResource;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return CartResource::collection(Auth::user()->carts()->with('playlist', 'user')->latest()->get());
    }
    public function store(Playlist $playlist)
    {
        if (!Auth::user()->allreadyInCart($playlist)){
            Auth::user()->addToCart($playlist);

            return response()->json([
                'message' => 'Added to cart'
            ]);
        }else{
            return response()->json([
                'message' => 'Playlist allready in the cart'
            ], 405);
        }
    }
}
