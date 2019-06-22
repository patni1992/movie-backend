<?php

use Illuminate\Database\Seeder;
use App\TvShow;

class TvShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TvShow::class, 50)->create();
    }
}
