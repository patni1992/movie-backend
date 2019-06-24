<?php

namespace App\Http\Controllers;

use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Resources\TvShowResource;
use App\Http\Requests\TvShowStoreRequest;

class TvShowController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $query = TvShow::query();

        if ($request->has('q')) {
            $search = $request->q;
            $query->where('name', 'LIKE', "%$search%");
        }

        return TvShowResource::collection($query->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Http\Resources\TvShowResource
     */
    public function store(TvShowStoreRequest $request)
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
    public function show(Tv $tvShow)
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
    public function update(TvShowStoreRequest $request, TvShow $tvShow)
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
