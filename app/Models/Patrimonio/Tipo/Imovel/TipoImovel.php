<?php

namespace App\Models\Patrimonio\Tipo\Imovel;

use App\Models\Patrimonio\Tipo\Imovel;
use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    protected $table        = 'tipo_imovel';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    public $timestamps      = false;


    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'tipo_imovel_id');
    }
}
