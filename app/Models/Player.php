<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    //
    protected $fillable = [
        'name',
        'nation',
        'elo',
    ];
    public $timestamps = false;

    public function plays(): HasMany
    {
        return $this->hasMany(Play::class, "player_id","id");
    }

}
