<?php

namespace App\Models\Patrimonio;


use App\Models\Universidade\UGB;
use App\Models\Universidade\UGE;
use App\Models\Universidade\Setor;
use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\Universidade\Departamento;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localizacao extends Model
{
    use SoftDeletes;
    protected $table        = 'dados_localizacao';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function ugb()
    {
        return $this->belongsTo(UGB::class, 'ugbs_id');
    }

    public function uge()
    {
        return $this->belongsTo(UGE::class, 'uges_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setores_id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamentos_id');
    }

    public function link(){
        return URL::route('patrimonio.localizacao.show', ['patrimonio' => $this->patrimonio->id()]);
    }

    public function setorLink(){
        return $this->setor()->exists()?
            $this->setor->link():null;
    }
    public function departamentoLink(){
        return $this->departamento()->exists()?
            $this->departamento->link():null;
    }

}
