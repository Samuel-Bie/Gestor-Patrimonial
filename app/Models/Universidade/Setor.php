<?php
namespace App\Models\Universidade;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Patrimonio\DadosDeLocalizacao;

class Setor extends Model
{
    use SoftDeletes;
    protected $table        = 'setores';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function delegacao()
    {
        return $this->belongsTo(Delegacoes::class, 'delegacao_id');
    }

    public function patrimonios()
    {
        return $this->hasMany(DadosDeLocalizacao::class, 'setores_id');
    }

}
