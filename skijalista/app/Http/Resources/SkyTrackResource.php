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
    public static $wrap = 'sky_track';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'track_name' => $this->resource->track_name,
            'track_length' => $this->resource->track_length,
            'track_category' => $this->resource->track_category,
            'slug' => $this->resource->slug,
            'sky_resort' => $this->resource->sky_resort
        ];
    }
}
