<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);
Route::get('/players/{player}', [PlayerController::class, 'show']);
Route::get('/players/{player}/edit', [PlayerController::class, 'edit']);
Route::put('/players/{player}', [PlayerController::class, 'update']);
Route::delete('/players/{player}', [PlayerController::class, 'destroy']);
*/

Route::group([
    'prefix' => 'players',
    'controller' => PlayerController::class,
    ], function () {
    Route::get('/', "index")->name('players.index');
    Route::get('/create', "create")->name('players.create');
    Route::post('/', "store")->name('players.store');
    Route::get('/{player}', "show")->name('players.show');
    Route::get('/{player}/edit', "edit")->name('players.edit');
    Route::put('/{player}', "update")->name('players.update');
    Route::delete('/{player}', "destroy")->name('players.destroy');
});

//Route::resource('players', PlayerController::class);