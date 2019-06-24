<?php

use Illuminate\Http\Request;
use App\Rating;
use App\TvShow;
use App\Http\Resources\TvShowResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::group([
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');
});

Route::apiResource('tv-shows', 'TvShowController');
Route::apiResource('tv-shows.ratings', 'TvShowRatingController');
Route::apiResource('ratings', 'RatingController')->except([
    'create', 'update',
]);

// Route::get('/ratings', 'RatingController@index');
// Route::get('/ratings/${id}', 'RatingController@show');

