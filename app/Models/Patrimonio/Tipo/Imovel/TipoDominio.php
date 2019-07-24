<?php

namespace App\Models\Patrimonio\Tipo\Imovel;

use App\Models\Patrimonio\Tipo\Imovel;
use Illuminate\Database\Eloquent\Model;

class TipoDominio extends Model
{
    protected $table        = 'tipo_dominio';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    public $timestamps      = false;

    public function chave(){
        return $this->id;
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'tipo_dominio_id');
    }
}
