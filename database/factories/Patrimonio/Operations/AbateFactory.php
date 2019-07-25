<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\User;
use Faker\Generator as Faker;
use App\Models\Patrimonio\Abate\Abate;

$factory->define(Abate::class, function (Faker $faker) {
    return [
        'nr_auto_ver_incap' => $faker->randomFloat(2,3,6),
        'data_despacho'     => now(),
        'entidade_autorizadora' => $faker->sentence(2),
        'valor_atual'           => $faker->randomFloat(2,3,6),
        'motivo'                => $faker->sentence(100),
        'destino'               => $faker->city,
        'ref_entrega'           => $faker->randomFloat(2,3,6),
        'data_entrega'          => now(),
        'obs'                   => $faker->sentence(20),
        'users_id'              => User::all()->random(),
    ];
});
