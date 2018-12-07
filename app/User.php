<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'nickname', 
        'country', 
        'city', 
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

   public function games() {
     return $this->hasMany(Game::class);
   }
<<<<<<< HEAD
}
=======


}
>>>>>>> 92de7f4094bfe9fb3a8470541e4cf00e3a172f9a
