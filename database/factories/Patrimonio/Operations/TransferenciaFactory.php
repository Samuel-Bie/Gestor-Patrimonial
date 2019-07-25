<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\User;
use Faker\Generator as Faker;
use App\Models\Patrimonio\Transferencia\Transferencia;

$factory->define(Transferencia::class, function (Faker $faker) {
    return [
        'referencia_autorizacao'    => $faker->randomFloat(2,3,6),
        'data_autorizacao'          => now(),
        'entidade_autorizadora'     => $faker->sentence(2),
        'motivo'                    => $faker->sentence(100),
        'destino'                   => $faker->city,
        'valor_atual'               => $faker->randomFloat(2,3,6),
        'custo_transferencia'       => $faker->randomFloat(2,3,6),
        'ref_entrega'        => $faker->randomFloat(2,3,6),
        'data_entrega'              => now(),
        'funcionario_receptor'      => $faker->name,
        'obs'                       =>$faker->sentence(20),
        'users_id'                  =>User::all()->random(),
    ];
});
