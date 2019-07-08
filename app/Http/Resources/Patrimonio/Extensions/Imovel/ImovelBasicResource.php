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
            'tipo_imovel'       => $this->tipoImovel->nome,
            'tipo_edificio'     => $this->tipoEdificio->nome,
            'tipo_dominio'      => $this->tipoDominio->nome,
            'nr_divisoes'       => $this->nr_divisoes,
            'nr_pisos'          => $this->nr_pisos,
            'cor'               => $this->cor,
            'area_cobertura'    => $this->area_cobertura,
            'area_terreno'      => $this->area_terreno,
            'elevadores'        => $this->elevadores? true: false,
            'sistema_incendio'  => $this->sistema_incendio? true: false,
            'ano_construcao'    => $this->ano_construcao,
            'registros' =>[
                'registro_predial' => [
                    'conservatoria_registro_predial'=> $this->info->conservatoria_registro_predial,
                    'nr_registro_predial'           => $this->info->nr_registro_predial,
                    'folhas_registro_predial'       => $this->info->folhas_registro_predial,
                    'livro_registro_predial'        => $this->info->livro_registro_predial,
                    'ano_registro'                  => $this->info->ano_registro,
                ],
                'matriz_predial' => [
                    'direcao_area_fiscal'   => $this->info->direcao_area_fiscal,
                    'nr_matriz_predial'     => $this->info->nr_matriz_predial,
                    'folhas_matriz_predial' => $this->info->folhas_matriz_predial,
                    'ano_matriz_predial'    => $this->info->ano_matriz_predial,
                    'livro_matriz_predial'  => $this->info->livro_matriz_predial,
                ]
            ],
        ];
    }
}
