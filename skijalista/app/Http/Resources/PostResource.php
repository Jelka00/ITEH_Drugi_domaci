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
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'post_title' => $this->post_title,
            'post_content' => $this->post_content,
            'excerpt' => $this->excerpt,
            'slug'=>$this->slug,
            'sky_resort_id'=>$this->sky_resort_id,
            'user_id' => $this->user_id,
        ];
    }
}
