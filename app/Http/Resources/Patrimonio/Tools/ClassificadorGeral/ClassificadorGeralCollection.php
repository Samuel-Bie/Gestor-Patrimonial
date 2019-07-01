<?php

namespace App\Http\Resources\Patrimonio\Tools\ClassificadorGeral;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClassificadorGeralCollection extends ResourceCollection
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
