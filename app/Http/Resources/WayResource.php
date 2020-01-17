<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WayResource extends JsonResource
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
            'name' => $this->name,
            'product' => $this->product,
            'weight'=> $this->weight,
            'created'=> $this->created_at,
          ];
    }
}
