<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Studio extends JsonResource
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
            'adress'=> $this->adress,
            'text'=> $this->text,
            'champs1'=> $this->champs1,
            'champs2'=> $this->champs2,
            'champs3'=> $this->champs3,
        ];    
    }
}
