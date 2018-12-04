<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;

use App\Game;
use App\Team;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $game = Game::orderBy('created_at', 'DESC')->paginate(5);
      return view('home')->with(compact('game'));
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
    public function store(GamesRequest $request) // como type hint le paso el nombre del request propio
    {
      // $game = new Game;
      Game::create($request->all());          // guardo todos los inputs de CreateGame

      return redirect('home')->with(compact('game'));  // redirijo a Home, pasándole este game, cmosabe que le esta pasando el game nuevo?
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $game = Game::findOrFail($id);

      return redirect('games.show')->with(compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $game = Game::findOrFail($id);        //busco el game que quiero modificar

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

      return redirect('home')->with('game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $game = Game::find($id);
      $game->delete();

      return redirect('home');
    }
}
