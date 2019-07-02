<?php

namespace App\Models\Patrimonio\Transferencia;

use App\Models\User\User;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transferencia extends Model
{
    use SoftDeletes;
    protected $table        = 'dados_transferencia';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
