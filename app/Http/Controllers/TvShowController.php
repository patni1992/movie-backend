<?php

namespace App\Http\Controllers;

use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Resources\TvShowResource;

class TvShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TvShowResource::collection(TvShow::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Http\Resources\TvShowResource
     */
    public function store(Request $request)
    {
        $tvShow = TvShow::create($request->all());
        return new TvShowResource($tvShow);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TvShow  $tvShow
     * @return \App\Http\Resources\TvShowResource
     */
    public function show(TvShow $tvShow)
    {
        return new TvShowResource($tvShow);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvShow  $tvShow
     * @return \App\Http\Resources\TvShowResource
     */
    public function update(Request $request, TvShow $tvShow)
    {
        $tvShow->update($request->all());
        return new TvShowResource($tvShow);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TvShow  $tvShow
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvShow $tvShow)
    {
        $tvShow->delete();
        return response(null, 204);
    }
}
