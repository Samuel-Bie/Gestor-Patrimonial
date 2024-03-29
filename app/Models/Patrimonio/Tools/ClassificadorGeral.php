<?php

namespace App\Models\Patrimonio\Tools;

use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassificadorGeral extends Model
{
    use SoftDeletes;
    protected $table        = 'classificador_geral';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }


    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'classificador_geral_id');
    }

    public function link(){
        return URL::route('classificador.show', ['classificador'=>$this->chave()]);
    }

    public function bensLink(){
        return URL::route('classificador.bens', ['classificador'=>$this->chave()]);
    }

}
