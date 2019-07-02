<?php

namespace App\Http\Resources\Patrimonio\Tools\ClassificadorGeral;

use App\Models\Patrimonio\Tools\ClassificadorGeral;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Patrimonio\Tools\ClassificadorGeral\ClassificadorGeralGeneralResource;

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
        $this->collection->transform(function (ClassificadorGeral $classe) {
            return (new ClassificadorGeralGeneralResource($classe));
        });
        return parent::toArray($request);
    }
}
