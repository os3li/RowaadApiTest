<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class test extends Resource
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
        'id' => $this->id,
        'img' => $this->img,
        'item' => $this->item,
        
        ];

       // return parent::toArray($request);
    }
}
