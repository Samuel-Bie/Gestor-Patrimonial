<?php

namespace App\Models\Patrimonio\Transferencia;

use App\Models\User\User;
use App\Models\Patrimonio\Ficheiro;
use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transferencia extends Model
{
    use SoftDeletes;
    protected $table        = 'transferencia';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function ficheiros()
    {
        return $this->hasMany(Ficheiro::class, 'transferencia_id');
    }

    public function link(){
        return URL::route('transferencia.show', ['patrimonio' => $this->chave(), 'transferencia' => $this->patrimonio->chave()]);
    }

}
