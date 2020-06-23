<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Track;
use Faker\Generator as Faker;

$factory->define(Track::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'artist_id' => random_int(0, 50),
        'album_id' => 0,
        'release_date' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
        'lyrics' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
    ];
});
