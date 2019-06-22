<?php
namespace App\Models\User;


use App\Models\Delegacoes;
use App\Models\User\Cargo;
use App\Models\User\Permissoes;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Notifications\Notifiable;
use App\Models\Patrimonio\Abate\DadosAbate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Patrimonio\Transferencia\DadosTransferencia;

class User extends Authenticatable
{
    use Notifiable;

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
        return $this->hasMany(Patrimonio::class, 'user_id');
    }

    public function permissoes()
    {
        return $this->hasMany(Permissoes::class, 'user_id');
    }
    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, 'permissoes', 'user_id', 'cargo_id');
    }

    public function delegacoes()
    {
        return $this->belongsToMany(Delegacoes::class, 'permissoes', 'user_id', 'delegacoes_id');
    }

    public function abates(){
        return $this->hasMany(DadosAbate::class, 'user_id');
    }
    public function transferencias(){
        return $this->hasMany(DadosTransferencia::class, 'user_id');
    }
    public function movimentacoes(){
        return $this->hasMany(Movimentacao::class, 'user_id');
    }
    public function manutencoes(){
        return $this->hasMany(Manutencao::class, 'user_id');
    }
}
