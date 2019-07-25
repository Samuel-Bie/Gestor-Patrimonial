<?php

namespace App\Http\Resources\Patrimonio\Operations\Manutencao;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Patrimonio\Manutencao\Manutencao;

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
        $this->collection->transform(function (Manutencao $manutencao) {
            return (new ManutencaoBasicResource($manutencao));
        });
        return parent::toArray($request);
    }
}
