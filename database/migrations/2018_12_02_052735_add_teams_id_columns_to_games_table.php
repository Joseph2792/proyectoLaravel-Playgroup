<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeamsIdColumnsToGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->unsignedInteger('team1_id')->nullable();
            $table->foreign('team1_id')->references('id')->on('games');
            $table->unsignedInteger('team2_id')->nullable();
            $table->foreign('team2_id')->references('id')->on('games');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropForeign('games_team1_id_foreign');
            $table->dropColumn('team1_id');
            $table->dropForeign('games_team2_id_foreign');
			$table->dropColumn('team2_id');
        });
    }
}
