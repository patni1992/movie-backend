<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TvShowResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'summary' => $this->summary,
            'image' => $this->image,
            'premiered' => $this->premiered,
            'rating' =>  sprintf("%0.1f",$this->ratings()->avg('rating'))
        ];
    }
}
