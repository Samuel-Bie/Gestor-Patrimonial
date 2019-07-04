<?php

namespace App\Http\Resources\Patrimonio\Patrimonio;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Patrimonio\Informacao\InformacaoBasicResource;

class PatrimonioBasicResource extends JsonResource
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
            "id" => $this->id(),
            'nip'               => $this->nip,
            'data_aquisicao'    => $this->data_aquisicao,
            'estado_aquisicao'  => $this->estadoAquisicao->designacao,
            'estado_conservacao'=> $this->estadoConservacao->designacao,
            'valor_aquisicao'   => $this->valor_aquisicao,
            'localizacao' => [
                'ugb'   => $this->localizacao->ugb->designacao,
                'uge'   => $this->localizacao->uge->designacao,
                'setor' => $this->localizacao->setor()->exists()? $this->localizacao->setor->nome: null,
                'departamento' => $this->localizacao->departamento()->exists()? $this->localizacao->departamento->nome: null,
                'links' => [
                    'self'=>[
                        'href' => $this->localizacao->link()
                    ],
                    'ugb'   => [
                        'href' => $this->localizacao->ugb->link()
                    ],
                    'uge'   => [
                        'href' => $this->localizacao->uge->link()
                    ],
                    'setor' => [
                        'href' => $this->localizacao->setor()->exists()? $this->localizacao->setor->link(): null
                    ],
                    'departamento' => [
                        'href' => $this->localizacao->departamento()->exists()? $this->localizacao->departamento->link(): null
                    ],
                ]
            ],
            'informacoes' => [
                'href' => $this->infoLink()
            ],
            'tipo' => [
                'imovel' => $this->imovel()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
                'veiculo' => $this->veiculo()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
                'livro' => $this->livro()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
                'movel' => $this->movel()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
            ],
            'operacoes' =>[
                'abate' => $this->abate()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
                'transferencia' => $this->transferencia()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
                'movimentacoes' => $this->movimentacoes()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,
                'manutencoes' => $this->manutencoes()->exists()? [
                    'href' => $this->linkTipo()
                ]: null,

            ],
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
                ]
            ]
        ];
    }
}
