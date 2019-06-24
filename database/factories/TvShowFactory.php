<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\TvShow;

$factory->define(TvShow::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'summary' => $faker->text(),
        'image' => $faker->imageUrl(400, 400),
        'premiered' => $faker->date()
    ];
});
