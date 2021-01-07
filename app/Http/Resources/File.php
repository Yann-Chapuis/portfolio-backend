<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class File extends JsonResource
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
            'studio_id'=> $this->studio_id,
            'technique_id'=> $this->technique_id,
            'url_image'=> $this->url_image,
        ];    
    }
}
