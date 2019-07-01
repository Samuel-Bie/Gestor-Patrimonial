<?php

namespace App\Http\Resources\Patrimonio\Extensions\Livro;

use Illuminate\Http\Resources\Json\JsonResource;

class LivroGeneralResource extends JsonResource
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
