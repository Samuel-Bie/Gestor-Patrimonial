<?php
namespace App\Models\Universidade;


use Illuminate\Support\Facades\URL;
use App\Models\Universidade\Delegacao;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Localizacao;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->belongsTo(Delegacao::class, 'delegacoes_id');
    }

    public function patrimonios()
    {
        return $this->hasMany(Localizacao::class, 'setores_id');
    }

    public function link(){
        return URL::route('setor.show', ['setor' => $this->id()]);
    }

}
