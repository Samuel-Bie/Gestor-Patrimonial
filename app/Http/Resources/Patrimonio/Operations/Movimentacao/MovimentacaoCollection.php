<?php

namespace App\Http\Resources\Patrimonio\Operations\Movimentacao;

use App\Models\Patrimonio\Movimentacao\Movimentacao;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Patrimonio\Operations\Movimentacao\MovimentacaoBasicResource;

class MovimentacaoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Movimentacao $movimentacao) {
            return (new MovimentacaoBasicResource($movimentacao));
        });
        return parent::toArray($request);
    }
}
