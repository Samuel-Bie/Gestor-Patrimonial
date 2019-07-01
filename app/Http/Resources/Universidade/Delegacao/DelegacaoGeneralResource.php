<?php

namespace App\Http\Resources\Universidade\Delegacao;

use Illuminate\Http\Resources\Json\JsonResource;

class DelegacaoGeneralResource extends JsonResource
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
