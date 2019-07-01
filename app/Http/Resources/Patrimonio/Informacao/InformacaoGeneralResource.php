<?php

namespace App\Http\Resources\Patrimonio\Informacao;

use Illuminate\Http\Resources\Json\JsonResource;

class InformacaoGeneralResource extends JsonResource
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
