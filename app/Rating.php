<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rating'
    ];

    public function tvShow()
    {
        return $this->belongsTo(TvShow::class);
    }
}
