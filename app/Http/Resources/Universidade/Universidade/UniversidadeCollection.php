<?php

namespace App\Http\Resources\Universidade\Universidade;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UniversidadeCollection extends ResourceCollection
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
