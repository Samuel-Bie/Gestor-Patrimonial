<?php
namespace App\Models\User;


use App\Models\User\Cargo;
use App\Models\User\Permissoes;
use App\Models\Instituicao\UGB;
use Laravel\Passport\HasApiTokens;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Abate\Abate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;
use App\Models\Patrimonio\Transferencia\Transferencia;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRelationships;

    public function teste(User $user){
        $user->teste = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bens()
    {
        return $this->hasMany(Patrimonio::class, 'users_id');
    }

    public function permissoes()
    {
        return $this->hasMany(Permissoes::class, 'users_id');
    }
    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, 'permissoes', 'users_id', 'cargo_id');
    }

    public function ugbs()
    {
        return $this->belongsToMany(UGB::class, 'permissoes', 'users_id', 'ugbs_id');
    }

    public function setores(){
        return $this->hasManyDeepFromRelations($this->ugbs(), (new UGB())->setores());
    }

    public function abates(){
        return $this->hasMany(Abate::class, 'users_id');
    }
    public function transferencias(){
        return $this->hasMany(Transferencia::class, 'users_id');
    }
    public function movimentacoes(){
        return $this->hasMany(Movimentacao::class, 'users_id');
    }
    public function manutencoes(){
        return $this->hasMany(Manutencao::class, 'users_id');
    }
}
