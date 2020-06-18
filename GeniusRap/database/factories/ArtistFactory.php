<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName($gender = null|'male'|'female'),
        'surname' => $faker->lastName,
        'artist_name' => $faker->firstName($gender = null|'male'|'female'),
    ];
});
