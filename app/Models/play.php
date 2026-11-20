<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class play extends Model
{
    protected $table = 'matches';
    public $timestamps = false;
    protected $fillable = ['player_id', 'kills', 'deaths', 'assists'];

    public function player():BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_id', 'id');
    }

}
