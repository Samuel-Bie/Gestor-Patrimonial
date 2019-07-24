<?php

namespace App\Models\Instituicao;


use App\Models\Instituicao\UGB;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UGE extends Model
{
    use SoftDeletes;
    protected $table        = 'uges';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function ugbs()
    {
        return $this->hasMany(UGB::class, 'uges_id');
    }

    public function link(){
        return URL::route('uge.show', ['uge' => $this->chave()]);
    }
}