<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestourantsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'restourant';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'class' => $this->resource->class,
            'slug'=>$this->resource->slug,
            'sky_resort'=>$this->resource->sky_resort,
        ];
    }
}
