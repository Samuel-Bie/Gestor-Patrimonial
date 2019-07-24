<?php
namespace App\Models\Instituicao;


use App\Models\Instituicao\UGB;
use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Localizacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setor extends Model
{
    use SoftDeletes;
    protected $table        = 'setores';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function ugb()
    {
        return $this->belongsTo(UGB::class, 'ugbs_id');
    }

    public function patrimonios()
    {
        return $this->hasMany(Localizacao::class, 'setores_id');
    }

    public function link(){
        return URL::route('setor.show', ['setor' => $this->chave()]);
    }

}
