<?php

namespace App\Http\Resources\Patrimonio\Operations\Transferencia;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TransferenciaCollection extends ResourceCollection
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
