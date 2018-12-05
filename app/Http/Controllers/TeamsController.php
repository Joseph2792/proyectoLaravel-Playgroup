<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function addPlayer($id, $user_id)
    {
      $team = Team::find($id);

      team->users()->sync($user_id);

      return ['status' => 'ok'];
    }
}
