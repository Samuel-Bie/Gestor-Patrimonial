<?php

namespace App\Http\Resources\Patrimonio\Tools\FormaDeAquisicao;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FormaDeAquisicaoCollection extends ResourceCollection
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
