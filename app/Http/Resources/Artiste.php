<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Artiste extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $fullName = explode(' ', $this->name);
        $firstname  = $fullName[0];
        $name  = $fullName[1];
        return [
            'firstname'=> $firstname,
            'name'=> $name,
            'url_image'=> $this->url_image,
            'facebook'=> $this->facebook,
            'instagram'=> $this->instagram,
            'youtube'=> $this->youtube,
            'whatsapp'=> $this->whatsapp,
        ];
    }
}
