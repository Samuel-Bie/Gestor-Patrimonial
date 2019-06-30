<?php

namespace App\Models\Patrimonio\Tipo;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

    protected $table        = 'livros';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    public $timestamps      = false;

    public function id(){
        return $this->id;
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
