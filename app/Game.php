<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'place',
        'price',
        'description',
        'number_of_players',
        'likes',
        'team1_id',
        'team2_id',
    ];

    protected $dates = ['date'];

    public function team1(){
        return $this->hasOne (Team::class, 'id', 'team1_id');
    }

    public function team2(){
        return $this->hasOne (Team::class, 'id', 'team2_id');
    }
}
