<?php
namespace App\Models\Patrimonio\Tools;


use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoBem extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'estado_bem';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function patrimonioInicial()
    {
        return $this->hasMany(Patrimonio::class, 'estado_aquisicao_bem_id');
    }

    public function patrimonioAtual()
    {
        return $this->hasMany(Patrimonio::class, 'estado_conservacao_bem_id');
    }

}
