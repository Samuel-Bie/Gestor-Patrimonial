<?php

namespace App\Models\User;

use App\Models\User\User;
use App\Models\Delegacoes;
use App\Models\User\Cargo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permissoes extends Model
{
    use SoftDeletes;
    protected $table        = 'permissoes';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    public function delegacao()
    {
        return $this->belongsTo(Delegacoes::class, 'delegacoes_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}