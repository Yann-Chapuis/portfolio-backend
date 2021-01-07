<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Video extends JsonResource
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
            'url_video'=> $this->url_video,
            'order'=> $this->order,
            'title'=> $this->title,
            'description'=> $this->description,
            'video_main'=> $this->video_main,
        ];
    }
}
