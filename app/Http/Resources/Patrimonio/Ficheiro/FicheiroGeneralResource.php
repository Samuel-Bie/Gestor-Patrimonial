<?php

namespace App\Http\Resources\Patrimonio\Ficheiro;

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
            'src'              => $this->path,
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
