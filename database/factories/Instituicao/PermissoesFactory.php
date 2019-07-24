<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\User;
use App\Models\User\Cargo;
use Faker\Generator as Faker;
use App\Models\User\Permissoes;
use App\Models\Instituicao\UGB;

$factory->define(Permissoes::class, function (Faker $faker) {
    return [
        'cargo_id'      => Cargo::all()->random(),
        'users_id'      => User::all()->random(),
        'ugbs_id'       => UGB::all()->random()
    ];
});