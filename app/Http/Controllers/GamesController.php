<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;

use App\Game;
use App\Team;
use App\User;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $games = Game::orderBy('created_at', 'DESC')->paginate(10);
      return view('home')->with(compact('games'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('games.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // ESTE ES EL BLOQUE DE CODIGO QUE NOS PASO JAVI PARA RELACIONAR ID DE TEAMS CUANDO CREO UN GAME
    public function store(GamesRequest $request) // como type hint le paso el nombre del request propio
    {
      $game = new Game;

      $team1 = new Team;
      $team1->size = $request->input('number_of_players');
      $team1->save();

      $team2 = new Team;
      $team2->size = $request->input('number_of_players');
      $team2->save();

      $game->title = $request->input('title');
      $game->place = $request->input('place');
      $game->price = $request->input('price');
      $game->description = $request->input('description');
      $game->number_of_players = $request->input('number_of_players');
      $game->date = $request->input('date');
      $game->team1_id = $team1->id;
      $game->team2_id = $team2->id;

      $game->user_id = auth()->user()->id;

      $game->save();

      return redirect('home')->with(compact('games'));  // redirijo a Home, pasándole este game, cmosabe que le esta pasando el game nuevo?
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $game = Game::find($id);

      return view('games.show')->with(compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $game = Game::findOrFail($id);//busco el game que quiero modificar

      return view('games.edit')->with(compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GamesRequest $request, $id)
    {
      $game = Game::find($id);
      $game->title = $request->input('title');
      $game->place = $request->input('place');
      $game->price = $request->input('price');
      $game->description = $request->input('description');
      $game->number_of_players = $request->input('number_of_players');
      $game->date = $request->input('date');

      $game->save();

      return redirect('home')->with('edited', "Partido editado: $game->title");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try {
        $game = Game::findOrFail($id);

        $title = $game->title;

        $team1 = Team::findOrFail($game->team1_id);
        $team1->delete();

        $team2 = Team::findOrFail($game->team2_id);
        $team2->delete();

        $game->delete();
        // Al hacer redirect se guarda en SESSION una posición deleted con el valor indicado
        return redirect('home')->with('deleted', "Partido eliminado: $title");

      } catch (\Exception $e) {
        return redirect('/game/'.$id)->with('errorDeleted', 'No se pudo eliminar :(');
      }

    }
}
