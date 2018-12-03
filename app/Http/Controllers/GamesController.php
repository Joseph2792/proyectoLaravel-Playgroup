<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $game = Game::all();
      return view('home')->with(compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('games.createGame');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $game = new Game;                       // instancio un objeto Game
      Game::create($request->all());          // todos los inputs de CreateGame
      $game->save();                          // guardo

      return redirect('home')->with(compact('game'));  // redirijo a Home, pasándole este game
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

      return redirect('games.viewGame')->with(compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $game = Game::find($id);        //busco el game que quiero modificar

      return view('games.editGame')->with(compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $game = Game::find($id);

      $game->name = $request->input('name');
      $game->place = $request->input('place');
      $game->price = $request->input('price');
      $game->number_of_players = $request->input('number_of_players');
      $game->description = $request->input('description');
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
