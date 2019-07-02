<?php

namespace App\Models\Patrimonio\Tipo;

use Illuminate\Support\Facades\URL;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table        = 'veiculos';
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

    public function link(){
        return URL::route('veiculo.show', ['veiculo' => $this->id()]);
    }
}
