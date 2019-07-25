<?php

namespace App\Http\Resources\Patrimonio\Operations;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Patrimonio\Operations\Abate\AbateBasicResource;
use App\Http\Resources\Patrimonio\Operations\Transferencia\TransferenciaBasicResource;
use App\Http\Resources\Patrimonio\Operations\Movimentacao\MovimentacaoCollection;
use App\Http\Resources\Patrimonio\Operations\Manutencao\ManutencaoCollection;
use App\Http\Resources\Patrimonio\Patrimonio\PatrimonioGeneralResource;

class PatrimonioOperationBasicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $transferencia = $this->transferencia;
        $abate = $this->abate;
        $movimentacoes = $this->movimentacoes;
        $manutencoes = $this->manutencoes;

        return [
            'creation'      => new PatrimonioGeneralResource($this),
            'abate'         => new AbateBasicResource($abate),
            'transferencia' => new TransferenciaBasicResource($transferencia),
            'movimentacoes' => new MovimentacaoCollection($movimentacoes),
            'manutencoes'   => new ManutencaoCollection($manutencoes)
        ];
    }
}
