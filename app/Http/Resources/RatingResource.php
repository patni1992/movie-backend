<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tv_show_id' => $this->rating,
            'rating' => $this->rating,
            'created_at' => $this->created_at,
            'updated_at' => $this->updeated,
        ];
    }
}
