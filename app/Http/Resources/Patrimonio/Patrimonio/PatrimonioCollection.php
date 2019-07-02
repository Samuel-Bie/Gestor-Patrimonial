<?php

namespace App\Http\Resources\Patrimonio\Patrimonio;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Patrimonio\Patrimonio\PatrimonioGeneralResource;

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
        $this->collection->transform(function (Patrimonio $patrimonio) {
            return (new PatrimonioGeneralResource($patrimonio));
        });
        return parent::toArray($request);
    }
}
