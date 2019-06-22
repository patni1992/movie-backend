<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    protected $fillable = [
        'name', 'summary', 'image', 'premiered'
    ];

    public function ratings()
    {
      return $this->hasMany(Rating::class);
    }
}
