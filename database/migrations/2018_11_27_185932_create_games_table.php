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
            $table->string('title');
            $table->dateTime('date');
            $table->string('place');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->integer('likes_count')->unsigned()->nullable();
            $table->integer('team1_id')->unsigned()->nullable();
            $table->integer('team2_id')->unsigned()->nullable();
            $table->tinyInteger('number_of_players');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned();
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