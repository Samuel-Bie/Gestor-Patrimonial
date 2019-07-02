<?php

namespace App\Models\Universidade;


use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use App\Models\Universidade\Universidade;
use Illuminate\Database\Eloquent\SoftDeletes;

class UGE extends Model
{
    use SoftDeletes;
    protected $table        = 'uges';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function universidade()
    {
        return $this->belongsTo(Universidade::class, 'universidade_id');
    }

    public function link(){
        return URL::route('uge.show', ['uge' => $this->id()]);
    }
}