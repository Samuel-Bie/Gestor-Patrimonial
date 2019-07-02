<?php

namespace App\Models\Patrimonio;

use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Abate\Abate;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Models\Patrimonio\Transferencia\Transferencia;

class Ficheiro extends Model
{
    use SoftDeletes;
    protected $table        = 'ficheiros';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }


    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function abate()
    {
        return $this->belongsTo(Abate::class, 'dados_abate_id');
    }

    public function transferencia()
    {
        return $this->belongsTo(Transferencia::class, 'dados_transferencia_id');
    }

    public function movimentacao()
    {
        return $this->belongsTo(Movimentacao::class, 'movimentacoes_id');
    }

    public function manuntencao()
    {
        return $this->belongsTo(Manutencao::class, 'manutencao_id');
    }

    public function link(){
        return URL::route('ficheiro.show', ['ficheiro'=>$this->id()]);

    }
    public function relLink(){
        if($this->patrimonio()->exists())
            return $this->patrimonio->link();
        if($this->abate()->exists())
            return $this->abate->link();
        if($this->transferencia()->exists())
            return $this->transferencia->link();
        if($this->movimentacao()->exists())
            return $this->movimentacao->link();
        if($this->manuntencao()->exists())
            return $this->manuntencao->link();
    }
}
