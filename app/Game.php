<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $fillable = ['title', 'place', 'price', 'number_of_players', 'description', 'team1_id', 'team2_id','user_id'];

  protected $dates = ['date'];

  public function user() {
    return $this->belongsTo(User::class, 'id', 'user_id');
  }

}