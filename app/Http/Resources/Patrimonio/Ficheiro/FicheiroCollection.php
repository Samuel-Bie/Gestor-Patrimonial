<?php

namespace App\Http\Resources\Patrimonio\Ficheiro;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Patrimonio\Ficheiro;

class FicheiroCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Ficheiro $file) {
            return (new FicheiroGeneralResource($file));
        });
        return parent::toArray($request);
    }
}
