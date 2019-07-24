<?php

namespace App\Models\Patrimonio\Tools;


use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoConservacao extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'estado_conservacao';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function patrimonio()
    {
        return $this->hasMany(Patrimonio::class, 'estado_conservacao_id');
    }
}