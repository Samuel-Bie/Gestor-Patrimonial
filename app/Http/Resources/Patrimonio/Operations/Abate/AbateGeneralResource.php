<?php

namespace App\Http\Resources\Patrimonio\Operations\Abate;

use Illuminate\Http\Resources\Json\JsonResource;

class AbateGeneralResource extends JsonResource
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
