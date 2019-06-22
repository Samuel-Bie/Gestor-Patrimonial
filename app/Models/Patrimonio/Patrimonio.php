<?php

namespace App\Models\Patrimonio;

use App\Models\User\User;
use App\Models\Patrimonio\Ficheiro;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Tools\EstadoBem;
use App\Models\Patrimonio\Abate\DadosAbate;
use App\Models\Patrimonio\DadosDeLocalizacao;
use App\Models\Patrimonio\InformacaoAdicional;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Models\Patrimonio\Transferencia\DadosTransferencia;

class Patrimonio extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'patrimonio';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function classe()
    {
        return $this->belongsTo(ClassificadorGeral::class, 'classificador_geral_id');
    }

    public function formaAquisicao()
    {
        return $this->belongsTo(FormaDeAquisicao::class, 'formas_aquisicao_id');
    }

    public function estadoAtual()
    {
        return $this->belongsTo(EstadoBem::class, 'estado_conservacao_bem_id');
    }


    public function estadoAquisicao()
    {
        return $this->belongsTo(EstadoBem::class, 'estado_aquisicao_bem_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function abate(){
        return $this->hasOne(DadosAbate::class, 'patrimonio_id');
    }
    public function transferencia(){
        return $this->hasOne(DadosTransferencia::class, 'patrimonio_id');
    }
    public function informacaoAdicional(){
        return $this->hasOne(InformacaoAdicional::class, 'patrimonio_id');
    }
    public function localizacao(){
        return $this->hasOne(DadosDeLocalizacao::class, 'patrimonio_id');
    }

    public function movimentacoes(){
        return $this->hasMany(Movimentacao::class, 'patrimonio_id');
    }

    public function manutencoes(){
        return $this->hasMany(Manutencao::class, 'patrimonio_id');
    }

    public function ficheiros(){
        return $this->hasMany(Ficheiro::class, 'patrimonio_id');
    }

}
