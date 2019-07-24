<?php

namespace App\Http\Resources\Patrimonio\Patrimonio;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Instituicao\UGB\UGBBasicResource;
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
            "id" => $this->chave(),
            'nip'               => $this->nip,
            'data_aquisicao'    => $this->data_aquisicao,
            'estado_aquisicao'  => $this->estadoAquisicao->designacao,
            'estado_conservacao'=> $this->estadoConservacao->designacao,
            'valor_aquisicao'   => $this->valor_aquisicao,
            'localizacao' => [
                'ugb'   => new UGBBasicResource($this->localizacao->ugb),
                'uge'   =>[
                    'codigo' => $this->localizacao->uge->codigo,
                    'designacao' => $this->localizacao->uge->designacao,
                    'href' => $this->localizacao->uge->link()
                ],
                'setor' => !$this->localizacao->setor()->exists()? null: [
                    'codigo' => $this->localizacao->setor->codigo,
                    'designacao' => $this->localizacao->setor->nome,
                    'href' => $this->localizacao->setor->link()
                ],
                'links' => [
                    'self'=>[
                        'href' => $this->localizacao->link()
                    ],
                ]
            ],
            'informacoes' => new InformacaoBasicResource($this->informacao),
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
