<?php

namespace App\Http\Resources\Patrimonio\Operations\Transferencia;

use Illuminate\Http\Resources\Json\JsonResource;

class TransferenciaBasicResource extends JsonResource
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
            'valor_atual'           => $this->valor_atual,
            'ref_entrega'           => $this->ref_entrega,
            'data_entrega'          => $this->data_entrega,
            'obs'                   => $this->obs,
            'custo_transferencia'   => $this->custo_transferencia,
            'funcionario_receptor'  => $this->funcionario_receptor,
        ];
    }
}
