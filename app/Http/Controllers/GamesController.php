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
        //
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
    public function store(GamesRequest $request)
    {
        $game = new Game;

        self::storeOrUpdate($game, $request);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeOrUpdate($game, $request){
        $game->title = $request->title;
        $game->place = $request->place;
        $game->price = $request->price;
        $game->description = $request->description;
        $game->number_of_player = $request->number_of_player;
       // $game->team1_id = $request->team1_id;
      //  $game->team2_id = $request->team2_id;

        $game->team1_id = 1;
        $game->team2_id = 2;

        $game->save();
    }
}
