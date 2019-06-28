<?php

namespace App\Models\Patrimonio\Tipo\Imovel;

use App\Models\Patrimonio\Tipo\Imovel;
use Illuminate\Database\Eloquent\Model;

class TipoEdificio extends Model
{
    protected $table        = 'tipo_edificio';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    public $timestamps      = false;

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'tipo_edificio_id');
    }
}
