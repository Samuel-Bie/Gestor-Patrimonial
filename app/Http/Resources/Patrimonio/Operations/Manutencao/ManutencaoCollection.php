<?php

namespace App\Http\Resources\Patrimonio\Operations\Manutencao;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ManutencaoCollection extends ResourceCollection
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
