<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rating',
        'tv_show_id'
    ];

    public function tvShow()
    {
        return $this->belongsTo(TvShow::class);
    }
}
