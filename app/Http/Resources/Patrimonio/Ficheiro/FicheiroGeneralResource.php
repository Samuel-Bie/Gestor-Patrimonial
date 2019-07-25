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

        $url = $this->path;

        if(!parse_url($url, PHP_URL_SCHEME)){
            $url = URL::asset($this->path);
        }
        return [
            'id' => $this->chave(),
            'src'              => $url,
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
