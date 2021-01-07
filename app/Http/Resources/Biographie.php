<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Biographie extends JsonResource
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
            'title'=> $this->title,
            'heading'=> $this->heading,
            'text'=> $this->text,
            'url_image'=> $this->url_image,
        ];
    }
}
