<?php

namespace App\Models\Patrimonio\Movimentacao;

use App\Models\User\User;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimentacao extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'movimentacoes';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
