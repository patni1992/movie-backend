<?php

namespace App\Http\Controllers;

use App\Rating;
use App\TvShow;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\TvShow  $tvShow
     * @return \Illuminate\Http\Response
     */
    public function index(TvShow $tvShow)
    {
        return $tvShow->ratings;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvShow  $tvShow
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TvShow $tvShow)
    {

        $rating = Rating::create(
            [
              'tv_show_id' => $tvShow->id,
              'rating' => $request->rating,
            ]);

        return $rating;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TvShow  $tvShow
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(TvShow $tvShow, Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvShow  $tvShow
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TvShow $tvShow, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TvShow  $tvShow
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvShow $tvShow, Rating $rating)
    {
        //
    }
}
