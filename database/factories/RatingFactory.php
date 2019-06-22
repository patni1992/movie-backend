<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'rating' => $faker->numberBetween(1, 10),
    ];
});
