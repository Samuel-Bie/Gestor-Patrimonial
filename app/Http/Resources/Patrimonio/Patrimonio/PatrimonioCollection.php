<?php

namespace App\Http\Resources\Patrimonio\Patrimonio;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PatrimonioCollection extends ResourceCollection
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
