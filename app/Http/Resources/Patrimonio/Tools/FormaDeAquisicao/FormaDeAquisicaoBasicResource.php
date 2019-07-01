<?php

namespace App\Http\Resources\Patrimonio\Tools\FormaDeAquisicao;

use Illuminate\Http\Resources\Json\JsonResource;

class FormaDeAquisicaoBasicResource extends JsonResource
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
