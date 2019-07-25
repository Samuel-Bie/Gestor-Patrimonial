<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\User;
use Faker\Generator as Faker;
use App\Models\Patrimonio\Manutencao\Manutencao;

$factory->define(Manutencao::class, function (Faker $faker) {
    return [
        'referencia_autorizacao'    => $faker->randomFloat(2,3,6),
        'data_autorizacao'          => now(),
        'entidade_autorizadora' => $faker->sentence(2),
        'motivo'                    => $faker->sentence(100),
        'destino'                   => $faker->city,
        'ref_entrega'        => $faker->randomFloat(2,3,6),
        'data_entrega' => now(),
        'funcionario_receptor' =>$faker->sentence(2),
        'obs'                   => $faker->sentence(20),
        'entidate_manutencao' => $faker->name,
        'periodo_manutencao'   => $faker->randomFloat(1,1,2),
        'local_manutencao'     => $faker->city,
        'obs_manutencao'       => $faker->sentence(20),
        'users_id'              => User::all()->random(),
    ];
});
