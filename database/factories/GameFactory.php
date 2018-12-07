<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'place' => $faker->sentence(1),
        'price' => $faker->numberBetween($min=50, $max=200),
        'number_of_players' => $faker->numberBetween($min=5, $max=11),
        'description' => $faker->sentence(10),
        'team1_id' => $faker->unique()->numberBetween($min=15, $max=200),
        'team2_id' => $faker->unique()->numberBetween($min=15, $max=200),
        'date' => $faker->dateTimeThisDecade->format('Y-m-d'),
        'user_id' => $faker->randomDigit
    ];
});
