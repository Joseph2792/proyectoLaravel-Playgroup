<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $fillable = ['title', 'place', 'price', 'number_of_players', 'description', 'team1_id', 'team2_id', 'date'];

  public function team1()
  {
    return $this->hasMany(Team::class, 'id', 'team1_id');
  }

  public function team2()
  {
    return $this->hasMany(Team::class, 'id', 'team2_id');
  }
}
