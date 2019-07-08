<?php

namespace App\Http\Resources\Universidade\Universidade;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Universidade\UGE\UGEBasicResource;

class UniversidadeBasicResource extends JsonResource
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
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'uge' => new UGEBasicResource($this->uge),
            'links' => [
                'self' => [
                    'href' => $this->link()
                ]
            ]
        ];
    }
}
