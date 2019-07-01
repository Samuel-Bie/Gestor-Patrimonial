<?php

namespace App\Http\Resources\Universidade\UGB;

use Illuminate\Http\Resources\Json\JsonResource;

class UGBBasicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
