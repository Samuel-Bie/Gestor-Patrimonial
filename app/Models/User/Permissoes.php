<?php

namespace App\Models\User;

use App\Models\User\User;
use App\Models\User\Cargo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Instituicao\UGB;

class Permissoes extends Model
{
    use SoftDeletes;
    protected $table        = 'permissoes';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    public function ugb()
    {
        return $this->belongsTo(UGB::class, 'ugbs_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
