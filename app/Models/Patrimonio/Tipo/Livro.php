<?php

namespace App\Models\Patrimonio\Tipo;

use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

    protected $table        = 'livros';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    public $timestamps      = false;

    public function chave(){
        return $this->id;
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function link(){
        return URL::route('livro.show', ['livro' => $this->chave()]);
    }
}
