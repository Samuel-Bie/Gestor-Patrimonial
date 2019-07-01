<?php

namespace App\Http\Resources\Patrimonio\Extensions\Imovel;

use Illuminate\Http\Resources\Json\JsonResource;

class ImovelGeneralResource extends JsonResource
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
