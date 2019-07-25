<?php

namespace App\Http\Resources\Patrimonio\Operations\Movimentacao;

use Illuminate\Http\Resources\Json\JsonResource;

class MovimentacaoBasicResource extends JsonResource
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
            'data'      => $this->created_at->format('Y-m-d H:i'),
            'referencia_autorizacao'   => $this->referencia_autorizacao,
            'data_autorizacao'         => $this->data_autorizacao,
            'entidade_autorizadora' => $this->entidade_autorizadora,
            'motivo'                => $this->motivo,
            'destino'               => $this->destino,
            'ref_entrega'           => $this->ref_entrega,
            'data_entrega'          => $this->data_entrega,
            'funcionario_receptor'  => $this->funcionario_receptor,
            'obs'                   => $this->obs,
        ];
    }
}
