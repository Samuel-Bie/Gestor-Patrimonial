<?php

namespace App\Models\Instituicao;

use App\Models\User\User;
use App\Models\Instituicao\UGE;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UGB extends Model
{
    use SoftDeletes;
    protected $table        = 'ugbs';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function uge()
    {
        return $this->belongsTo(UGE::class, 'uges_id');
    }
    public function setores()
    {
        return $this->hasMany(Setor::class, 'ugbs_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'permissoes', 'ugbs_id', 'users_id')
            ->withPivot('cargo_id');
    }


    public function link(){
        return URL::route('ugb.show', ['ugb' => $this->chave()]);
    }
}