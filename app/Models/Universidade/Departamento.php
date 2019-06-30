<?php
namespace App\Models\Universidade;



use App\Models\Delegacoes;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\DadosDeLocalizacao;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use SoftDeletes;
    protected $table        = 'departamentos';
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
        return $this->hasMany(DadosDeLocalizacao::class, 'departamentos_id');
    }
}
