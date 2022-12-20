<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkyResortResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'resort_name'=>$this->resort_name,
            'resort_location'=>$this->resort_location,
            'track_km'=>$this->track_km,
            'slug'=>$this->slug,
        ];
    }
}
