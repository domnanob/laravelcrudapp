<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/players', [PlayerController::class, 'indexapi']);
Route::get('/players/{player}', [PlayerController::class, 'showapi']);
Route::put('/players/{player}', [PlayerController::class, 'updateapi']);
Route::post('/players', [PlayerController::class, 'storeapi']);
Route::delete('/players/{player}', [PlayerController::class, 'deleteapi']);