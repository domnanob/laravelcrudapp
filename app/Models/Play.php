<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Play extends Model
{
    protected $table = 'matches';
    protected $fillable = [
        'kills',
        'deaths',
        'assists',
    ];
    public $timestamps = false;
    public function player():BelongsTo {
        return $this->belongsTo(Player::class, 'player_id', 'id');
    }
}
