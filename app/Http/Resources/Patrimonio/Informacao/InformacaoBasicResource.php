<?php

namespace App\Http\Resources\Patrimonio\Informacao;

use Illuminate\Http\Resources\Json\JsonResource;

class InformacaoBasicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // dd($this);
        return [
            'fornecedor' => [
                'nome' => $this->fornecedor,
                'nuit'       => $this->nuit,
                'endereco'   => $this->endereco,
                'cidade'     => $this->cidade,
                'comprovativo_compra'   => $this->tipo_comprovativo,
                'nr_comprovativo'       => $this->nr_comprovativo,
                'assistencia_tecnica'   => $this->assistencia_tecnica? true : false,
                'garantia'              => $this->garantia,
            ],
            'utilizador' => $this->utilizador,
            'seguro' => $this->seguro? true: false,
            'kit_ferramentas' => $this->ferramentas? true:false,
            'extintor' => $this->extintor?true:false,
            'links' => [
                'self' => [
                    'href' => $this->patrimonio->infoLink()
                ],
                'patrimonio' => [
                    'href' => $this->patrimonio->link()
                ]
            ]
        ];
    }
}
