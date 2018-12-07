<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $games = factory(App\Game::class)->times(20)->create();

      for ($i = 0; $i < count($games); $i++) {
	      $user = $user[rand(1,20)];
	      $user->games()->save($games[$i]);
      }
    }
}
