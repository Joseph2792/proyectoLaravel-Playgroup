<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $fillable = ['title', 'place', 'price', 'number_of_players', 'description', 'team1_id', 'team2_id','user_id'];

  protected $dates = ['date'];

  public function user() {
<<<<<<< HEAD
    return $this->hasOne(User::class, 'id', 'user_id');
  }
}
=======
    return $this->belongsTo(User::class, 'id', 'user_id');
  }

}
>>>>>>> 92de7f4094bfe9fb3a8470541e4cf00e3a172f9a
