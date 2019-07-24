<?php

namespace App\Http\Resources\Patrimonio\Patrimonio;

use Illuminate\Http\Resources\Json\JsonResource;

class PatrimonioGeneralResource extends JsonResource
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
            "id" => $this->chave(),
            'nip'               => $this->nip,
            'classe'            => $this->classe->designacao,
            'data_aquisicao'    => $this->data_aquisicao,
            'estado_aquisicao'  => $this->estadoAquisicao->designacao,
            'estado_conservacao'=> $this->estadoConservacao->designacao,
            'valor_aquisicao'   => $this->valor_aquisicao,
            'ugb'               => $this->localizacao->ugb->designacao,
            'tipo' => $this->tipoName(),
            'links' => [
                'self' => [
                    'href' => $this->link()
                ],
                'classificador'=>[
                    'href' => $this->classe->link()
                ],
                'forma_aquisicao'=>[
                    'href' => $this->formaAquisicao->link()
                ],
                'ficheiros'=>[
                    'href' => $this->linkFicheiros()
                ],
                'localizacao' =>[
                    'href'=> $this->localizacao->link()
                ]
            ]
        ];
    }
}
