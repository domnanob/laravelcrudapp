<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('players.index', [
            'players' => Player::all()
        ]);
    }
    public function indexapi() {
        $players = Player::all();
        return response()->json($players);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'nation' => 'required|string|max:3',
            'elo' => 'required|integer',
        ]);

        Player::create($request->all());
        return redirect()->route('players.index');
    }
    public function storeapi(Request $request) {
        $request->validate([
            'name' => 'required',
            'nation' => 'required|string|max:3',
            'elo' => 'required|integer',
        ]);

        $player = Player::create($request->all());
        return response()->json($player, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
        return view('players.show', compact('player'));
    }
    public function showapi(Player $player) {
        return response()->json($player);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
        return view('players.update', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
        $request->validate([
            'name' => 'required',
            'nation' => 'required|string|max:3',
            'elo' => 'required|integer',
        ]);

        $player->update($request->all());
        return redirect()->route('players.index');
    }

    public function updateapi(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required',
            'nation' => 'required|string|max:3',
            'elo' => 'required|integer',
        ]);

        $player->update($request->all());
        return response()->json($player);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
        $player->delete();
        return redirect()->route('players.index');
    }
    public function destroyapi(Player $player)
    {
        //
        $player->delete();
        return response(null, 204);
    }
}
