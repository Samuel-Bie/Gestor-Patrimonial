<?php

namespace App\Models\Patrimonio;

use App\Models\User\User;
use App\Models\Patrimonio\Ficheiro;
use App\Models\Patrimonio\Tipo\Livro;
use App\Models\Patrimonio\Tipo\Movel;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Models\Patrimonio\Tipo\Veiculo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Abate\DadosAbate;
use App\Models\Patrimonio\DadosDeLocalizacao;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Patrimonio\Info\AdicionalGeral;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Tools\EstadoAquisicao;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Models\Patrimonio\Tools\EstadoConservacao;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Models\Patrimonio\Transferencia\DadosTransferencia;

class Patrimonio extends Model
{
    use SoftDeletes;
    protected $table        = 'patrimonio';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function classe()
    {
        return $this->belongsTo(ClassificadorGeral::class, 'classificador_geral_id');
    }

    public function formaAquisicao()
    {
        return $this->belongsTo(FormaDeAquisicao::class, 'formas_aquisicao_id');
    }

    public function estadoAquisicao()
    {
        return $this->belongsTo(EstadoAquisicao::class, 'estado_conservacao_id');
    }


    public function estadoConservacao()
    {
        return $this->belongsTo(EstadoConservacao::class, 'estado_aquisicao_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /* Informacoes */
        public function informacao()
        {
            return $this->hasOne(AdicionalGeral::class, 'patrimonio_id');
        }
        public function localizacao()
        {
            return $this->hasOne(DadosDeLocalizacao::class, 'patrimonio_id');
        }

        public function imovel()
        {
            return $this->hasOne(Imovel::class, 'patrimonio_id');
        }


        public function veiculo()
        {
            return $this->hasOne(Veiculo::class, 'patrimonio_id');
        }

        public function livro()
        {
            return $this->hasOne(Livro::class, 'patrimonio_id');
        }

        public function movel()
        {
            return $this->hasOne(Movel::class, 'patrimonio_id');
        }
    /* Informacoes */


    /* Operacoes */
        public function abate()
        {
            return $this->hasOne(DadosAbate::class, 'patrimonio_id');
        }
        public function transferencia()
        {
            return $this->hasOne(DadosTransferencia::class, 'patrimonio_id');
        }

        public function movimentacoes()
        {
            return $this->hasMany(Movimentacao::class, 'patrimonio_id');
        }
        public function manutencoes()
        {
            return $this->hasMany(Manutencao::class, 'patrimonio_id');
        }
    /* Operacoes */

    public function ficheiros()
    {
        return $this->hasMany(Ficheiro::class, 'patrimonio_id');
    }
}