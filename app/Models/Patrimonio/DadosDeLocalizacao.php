<?php

namespace App\Models\Patrimonio;

use App\Model\UGE;
use App\Models\UGB;
use App\Models\Setor;
use App\Models\Departamento;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DadosDeLocalizacao extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'dados_localizacao';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function ugb()
    {
        return $this->belongsTo(UGB::clss, 'ugbs_id');
    }

    public function uge()
    {
        return $this->belongsTo(UGE::class, 'uges_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setor_id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

}
