<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['number_of_players'];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
