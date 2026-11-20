<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'name',
        'nation',
        'elo',
    ];
    public $timestamps = false;

}
