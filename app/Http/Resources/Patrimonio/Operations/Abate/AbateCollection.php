<?php

namespace App\Http\Resources\Patrimonio\Operations\Abate;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AbateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
