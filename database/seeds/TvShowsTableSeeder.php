<?php

use Illuminate\Database\Seeder;
use App\TvShow;
use App\Rating;

class TvShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TvShow::class, 12)->create()->each(function ($tvShow) {
            $ratings = factory(Rating::class, 4)->make();
            $tvShow->ratings()->saveMany($ratings);
        });
    }
}
