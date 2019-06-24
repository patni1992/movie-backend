<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\TvShow;
use App\Rating;

class TvShowsJsonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(base_path() . "/database/data/tv-shows.json");
        $data = json_decode($json);
        foreach ($data as $tvShow) {
            $tvShow = TvShow::create([
                'name' => $tvShow->name,
                'summary' => $tvShow->summary,
                'image' => $tvShow->image->medium,
                'premiered' => $tvShow->premiered
            ]);
            $ratings = factory(Rating::class, 4)->make();
            $tvShow->ratings()->saveMany($ratings);
        }
    }
}
