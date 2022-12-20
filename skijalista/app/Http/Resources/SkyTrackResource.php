<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkyTrackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'track_name' => $this->track_name,
            'track_length' => $this->track_length,
            'track_category' => $this->track_category,
            'slug'=>$this->slug,
            'sky_resort_id'=>$this->sky_resort_id,
        ];
    }
}
