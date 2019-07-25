<?php

namespace App\Models\Patrimonio\Abate;

use App\Models\User\User;
use App\Models\Patrimonio\Ficheiro;
use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abate extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'abate';
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
        return $this->hasMany(Ficheiro::class, 'abate_id');
    }

    public function link(){
        return URL::route('abate.show', ['patrimonio'=>$this->patrimonio->chave(), 'abate'=>$this->chave()]);
    }
}
