<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'date',
        'place',
        'price',
        'description',
        'number_of_player',
        'likes',
        'team1_id',
        'team2_id',
    ];

    public function team1(){
        return $this->hasOne (Team::class, 'id', 'team1_id');
    }

    public function team2(){
        return $this->hasOne (Team::class, 'id', 'team2_id');
    }
}
