<?php

namespace App\Models;

use App\Models\Universidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delegacoes extends Model
{
    //
    use SoftDeletes;
    protected $table        = 'delegacoes';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function universidade()
    {
        return $this->belongsTo(Universidade::class, 'universidade_id');
    }

    public function ugb()
    {
        return $this->hasOne(UGB::class, 'delegacoes_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'permissoes', 'delegacoes_id', 'user_id')
            ->withPivot('cargo_id');
    }
}
