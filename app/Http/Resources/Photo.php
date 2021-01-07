<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Photo extends JsonResource
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
            'categorie'=> $this->categorie,
            'ranking'=> $this->ranking,
            'url_image'=> $this->url_image,
            'url_thumb'=> $this->url_thumb,
        ];
    }
}
