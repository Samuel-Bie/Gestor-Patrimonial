<?php

namespace App\Models\Patrimonio\Tools;


use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoAquisicao extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'estado_aquisicao';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function patrimonioInicial()
    {
        return $this->hasMany(Patrimonio::class, 'estado_aquisicao_id');
    }
}