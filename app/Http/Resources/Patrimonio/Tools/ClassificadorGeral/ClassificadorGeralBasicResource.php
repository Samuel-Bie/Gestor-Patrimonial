<?php

namespace App\Http\Resources\Patrimonio\Tools\ClassificadorGeral;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassificadorGeralBasicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'codigo' => $this->codigo,
            'designacao' => $this->designacao,
            'links'=>[
                'self' => [
                    'href' => $this->link()
                ]
            ]
        ];
    }
}
