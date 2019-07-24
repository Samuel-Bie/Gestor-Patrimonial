<?php

namespace App\Http\Resources\Instituicao\UGB;

use Illuminate\Support\Facades\URL;
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
                'setores' => [
                    'href' => URL::route('ugb.setores', ['ugb' => $this->chave()]),
                ],
                'users' => [
                    'href' => ''
                ]

            ]
        ];
    }
}
