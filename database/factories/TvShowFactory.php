<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\TvShow;

$factory->define(TvShow::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'summary' => $faker->text(),
        'image' => $faker->imageUrl(1000, 1000),
        'rating' => $faker->randomDigit(),
        'premiered' => $faker->date()
    ];
});
