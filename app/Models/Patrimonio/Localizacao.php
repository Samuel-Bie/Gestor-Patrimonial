<?php

namespace App\Models\Patrimonio;


use App\Models\Instituicao\UGB;
use App\Models\Instituicao\Setor;
use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Localizacao extends Model
{
    use  HasRelationships;

    use SoftDeletes;
    protected $table        = 'dados_localizacao';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function ugb()
    {
        return $this->hasOneDeepFromRelations($this->setor(), (new Setor())->ugb());
    }

    public function uge()
    {
        return $this->hasOneDeepFromRelations($this->setor(), (new Setor())->ugb(), (new UGB())->uge());
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setores_id');
    }


    public function link(){
        return URL::route('patrimonio.localizacao.show', ['patrimonio' => $this->patrimonio->chave()]);
    }

    public function setorLink(){
        return $this->setor()->exists()?
            $this->setor->link():null;
    }
}
