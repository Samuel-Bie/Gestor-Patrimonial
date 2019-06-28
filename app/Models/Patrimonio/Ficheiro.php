<?php

namespace App\Models\Patrimonio;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Abate\DadosAbate;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Models\Patrimonio\Transferencia\DadosTransferencia;

class Ficheiro extends Model
{
    use SoftDeletes;
    protected $table        = 'ficheiros';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];


    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function abate()
    {
        return $this->belongsTo(DadosAbate::class, 'dados_abate_id');
    }

    public function transferencia()
    {
        return $this->belongsTo(DadosTransferencia::class, 'dados_transferencia_id');
    }

    public function movimentacao()
    {
        return $this->belongsTo(Movimentacao::class, 'movimentacoes_id');
    }

    public function manuntencao()
    {
        return $this->belongsTo(Manutencao::class, 'manutencao_id');
    }
}
