<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'post';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->resource->id,
            'post_title' => $this->resource->post_title,
            'post_content' => $this->resource->post_content,
            'excerpt' => $this->resource->excerpt,
            'slug' => $this->resource->slug,
            'sky_resort' => $this->resource->sky_resort,
            'user' => $this->resource->user
        ];
    }
}
