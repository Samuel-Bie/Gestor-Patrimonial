<?php
namespace App\Models\Universidade;



use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Universidade\Delegacao;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrimonio\Localizacao;
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
        return $this->belongsTo(Delegacao::class, 'delegacao_id');
    }

    public function localizacoes()
    {
        return $this->hasMany(Localizacao::class, 'departamentos_id');
    }

    public function link(){
        return URL::route('departamento.show', ['departamento' => $this->id()]);
    }
}
