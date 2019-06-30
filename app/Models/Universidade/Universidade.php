<?php

namespace App\Models\Universidade;


use App\Models\Universidade\UGE;
use App\Models\Universidade\Delegacoes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Universidade extends Model
{
    use SoftDeletes;
    protected $table        = 'universidade';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];


    public function id(){
        return $this->id;
    }

    public function uge()
    {
        return $this->hasOne(UGE::class, 'universidade_id');
    }

    public function delegacoes()
    {
        return $this->hasMany(Delegacoes::class, 'universidade_id');
    }
}