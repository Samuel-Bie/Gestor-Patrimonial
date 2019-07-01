<?php

namespace App\Http\Resources\Patrimonio\Extensions\Movel;

use Illuminate\Http\Resources\Json\JsonResource;

class MovelGeneralResource extends JsonResource
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
