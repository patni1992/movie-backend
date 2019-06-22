<?php

namespace App\Http\Controllers;

use App\TvShow;
use Illuminate\Http\Request;

class TvShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TvShow::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return TvShow::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TvShow  $tvShow
     * @return \Illuminate\Http\Response
     */
    public function show(TvShow $tvShow)
    {
        return $tvShow;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvShow  $tvShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TvShow $tvShow)
    {
        $tvShow->update($request->all());
        return $tvShow;
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
