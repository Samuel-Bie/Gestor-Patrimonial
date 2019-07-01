<?php

namespace App\Http\Resources\User\Permissao;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissaoGeneralResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
