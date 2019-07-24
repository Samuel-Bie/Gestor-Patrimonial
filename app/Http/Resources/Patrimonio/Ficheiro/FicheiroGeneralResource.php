<?php

namespace App\Http\Resources\Patrimonio\Ficheiro;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class FicheiroGeneralResource extends JsonResource
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
            'id' => $this->chave(),
            'src'              => URL::asset('storage/'.$this->path),
            'links' => [
                'self' => [
                    'href' => $this->link()
                ],
                'rel'=>[
                    'href' => $this->relLink()
                ]
            ]
        ];
    }
}
