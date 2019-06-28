<?php

namespace App\Models\Patrimonio\Tipo;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Tipo\Imovel\TipoImovel;
use App\Models\Patrimonio\Tipo\Imovel\TipoDominio;
use App\Models\Patrimonio\Tipo\Imovel\TipoEdificio;

class Imovel extends Model
{
    protected $table        = 'imoveis';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    public $timestamps      = false;

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
    public function tipoEdificio()
    {
        return $this->belongsTo(TipoEdificio::class, 'tipo_edificio_id');
    }
    public function tipoDominio()
    {
        return $this->belongsTo(TipoDominio::class, 'tipo_dominio_id');
    }
    public function tipoImovel()
    {
        return $this->belongsTo(TipoImovel::class, 'tipo_imovel_id');
    }
}
