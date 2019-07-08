<?php

namespace App\Http\Resources\Universidade\UGB;

use Illuminate\Http\Resources\Json\JsonResource;

class UGBBasicResource extends JsonResource
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
            "codigo" => $this->codigo,
            "designacao" => $this->designacao,
            "provincia" => $this->provincia,
            "destrito" => $this->destrito,
            "posto_administrativo" => $this->posto_administrativo,
            "localidade" => $this->localidade,
            "bairro" => $this->bairro,
            "endereco" => $this->endereco,
            "classificador_territorial" => $this->classificador_territorial,
            'links' => [
                "self" => [
                    "href" => $this->link()
                ],
                "delegacao" => [
                    "href" => $this->delegacao->link()
                ],
            ]
        ];
    }
}
