<?php

namespace App\Http\Resources\Patrimonio\Extensions\Imovel;

use Illuminate\Http\Resources\Json\JsonResource;

class ImovelBasicResource extends JsonResource
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
            'id' => $this->id(),
            'tipo_imovel'   => $this->tipoImovel->nome,
            'tipo_edificio' => $this->tipoEdificio->nome,
            'tipo_dominio'   => $this->tipoDominio->nome,
            // patrimonio
            'details'=>[
                'registro_predial' => [
                    'conservatoria' => $this->info->conservatoria_registro_predial
                ]
            ],
        ];
    }
}
