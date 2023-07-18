<?php

use App\Http\Controllers\Auth\MeController;
use App\Http\Controllers\Order\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Screencast\PlaylistController;
use App\Http\Controllers\Screencast\VideoController;

Route::prefix('playlists')->group(function () {
    Route::get('', [PlaylistController::class, 'index']);
    Route::get('{playlist:slug}', [PlaylistController::class, 'show']);

    Route::get('{playlist:slug}/videos', [VideoController::class, 'index']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', MeController::class);
    Route::get('playlists/{playlist:slug}/{video:episode}', [VideoController::class, 'show']);

    Route::get('carts', [CartController::class, 'index']);
    Route::post('add-to-cart/{playlist:slug}', [CartController::class, 'store']);
});
