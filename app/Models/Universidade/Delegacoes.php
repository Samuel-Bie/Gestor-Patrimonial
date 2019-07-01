<?php
namespace App\Models\Universidade;

use App\Models\Universidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delegacoes extends Model
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
}
