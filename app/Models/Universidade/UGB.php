<?php

namespace App\Models\Universidade;

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

    public function id(){
        return $this->id;
    }

    public function delegacao()
    {
        return $this->belongsTo(Delegacao::class, 'delegacoes_id');
    }

    public function link(){
        return URL::route('ugb.show', ['ugb' => $this->id()]);
    }
}