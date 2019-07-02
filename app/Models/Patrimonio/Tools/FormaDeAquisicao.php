<?php

namespace App\Models\Patrimonio\Tools;

use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormaDeAquisicao extends Model
{
    use SoftDeletes;
    protected $table        = 'formas_aquisicao';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'formas_aquisicao_id');
    }

    public function link(){
        return URL::route('forma-aquisicao.show', ['forma'=>$this->id()]);
    }

}
