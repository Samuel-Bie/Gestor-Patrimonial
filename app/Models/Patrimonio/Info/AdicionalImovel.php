<?php

namespace App\Models\Patrimonio\Info;

use App\Models\Patrimonio\Tipo\Imovel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdicionalImovel extends Model
{
    use SoftDeletes;
    protected $table        = 'imovel_info_addicional';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'imoveis_id');
    }
}
