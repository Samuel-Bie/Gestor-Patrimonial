<?php

namespace App\Models\Patrimonio\Info;

use Illuminate\Database\Eloquent\Model;

class AdicionalImovel extends Model
{
    use SoftDeletes;
    protected $table        = 'imovel_info_addicional';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    //
}
