<?php

namespace App\Http\Controllers;

use App\Rating;
use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Resources\RatingResource;
use App\Http\Requests\RatingStoreRequest;

class TvShowRatingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\TvShow  $tvShow
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(TvShow $tvShow)
    {
        return RatingResource::collection($tvShow->ratings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvShow  $tvShow
     * @return \App\Http\Resources\RatingResource
     */
    public function store(RatingStoreRequest $request, TvShow $tvShow)
    {
        $rating = Rating::create(
            [
                'tv_show_id' => $tvShow->id,
                'rating' => $request->rating,
            ]
        );

        return new RatingResource($rating);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TvShow  $tvShow
     * @param  \App\Rating  $rating
     * @return \App\Http\Resources\RatingResource
     */
    public function show(TvShow $tvShow, Rating $rating)
    {
        return new RatingResource($rating);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvShow  $tvShow
     * @param  \App\Rating  $rating
     * @return \App\Http\Resources\RatingResource
     */
    public function update(RatingStoreRequest $request, TvShow $tvShow, Rating $rating)
    {
        $rating->update($request->only(['rating']));
        return new RatingResource($rating);
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
        $rating->delete();
        return response(null, 204);
    }
}
