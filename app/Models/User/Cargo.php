<?php

namespace App\Models\User;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model
{
    // //
    use SoftDeletes;
    protected $table        = 'cargo';
    protected $primaryKey   = "id";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];

    public function chave(){
        return $this->id;
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'permissoes', 'cargo_id', 'users_id');
    }
}
