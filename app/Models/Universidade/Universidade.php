<?php
namespace App\Models\Universidade;

use App\Models\Universidade\UGE;
use Illuminate\Support\Facades\URL;
use App\Models\Universidade\Delegacao;
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
        return $this->hasMany(Delegacao::class, 'universidade_id');
    }

    public function link(){
        return URL::route('universidade.show', ['universidade' => $this->id()]);
    }
}