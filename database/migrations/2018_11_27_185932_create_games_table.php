<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('date');
            $table->string('place');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->integer('team1_id')->unsigned();
            $table->foreign('team1_id')->references('id')->on('teams');
            $table->integer('team2_id')->unsigned();
            $table->foreign('team2_id')->references('id')->on('teams');
            $table->tinyInteger('number_of_players');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
