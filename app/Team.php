<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'sise',
    ];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
