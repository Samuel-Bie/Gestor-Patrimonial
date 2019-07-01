<?php

namespace App\Http\Resources\Universidade\Departamento;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartamentoBasicResource extends JsonResource
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
