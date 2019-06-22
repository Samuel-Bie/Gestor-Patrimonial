<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\User;
use App\Models\Delegacoes;
use App\Models\User\Cargo;
use Faker\Generator as Faker;
use App\Models\User\Permissoes;

$factory->define(Permissoes::class, function (Faker $faker) {
    return [
        `cargo_idcargo`         => Cargo::all()->random(),
        `users_id`              => User::all()->random(),
        `delegacoes_iddelegacao`=> Delegacoes::all()->random()
    ];
});
