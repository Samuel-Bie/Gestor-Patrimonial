<?php

namespace App\Http\Resources\Patrimonio\Operations\Abate;

use Illuminate\Http\Resources\Json\JsonResource;

class AbateBasicResource extends JsonResource
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
            'nr_auto'   => $this->nr_auto_ver_incap,
            'data_despacho'         => $this->data_despacho,
            'entidade_autorizadora' => $this->entidade_autorizadora,
            'valor_atual'           => $this->valor_atual,
            'motivo'                => $this->motivo,
            'destino'               => $this->destino,
            'ref_entrega'           => $this->ref_entrega,
            'data_entrega'          => $this->data_entrega,
            'obs'                   => $this->obs
        ];
    }
}
