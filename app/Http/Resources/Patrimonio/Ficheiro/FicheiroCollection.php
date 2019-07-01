<?php

namespace App\Http\Resources\Patrimonio\Ficheiro;

use Illuminate\Http\Resources\Json\ResourceCollection;

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
        return parent::toArray($request);
    }
}
