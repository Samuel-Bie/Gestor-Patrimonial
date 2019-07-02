<?php
namespace App\Models\Universidade;

use App\Models\User\User;
use App\Models\Universidade\UGB;
use App\Models\Universidade\Setor;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use App\Models\Universidade\Departamento;
use App\Models\Universidade\Universidade;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delegacao extends Model
{
    use SoftDeletes;
    protected $table        = 'delegacoes';
    protected $primaryKey   = 'id';
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function id(){
        return $this->id;
    }

    public function universidade()
    {
        return $this->belongsTo(Universidade::class, 'universidade_id');
    }

    public function ugb()
    {
        return $this->hasOne(UGB::class, 'delegacoes_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'permissoes', 'delegacoes_id', 'user_id')
            ->withPivot('cargo_id');
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'delegacoes_id');
    }
    public function setores()
    {
        return $this->hasMany(Setor::class, 'delegacoes_id');
    }

    public function link(){
        return URL::route('delegacao.show', ['delegacao' => $this->id()]);
    }
}
