<?php

namespace App\Http\Resources\Universidade\UGE;

use Illuminate\Http\Resources\Json\JsonResource;

class UGEBasicResource extends JsonResource
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
