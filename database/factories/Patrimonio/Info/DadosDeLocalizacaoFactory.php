<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Instituicao\Setor;
use App\Models\Patrimonio\Localizacao;

$factory->define(Localizacao::class, function (Faker $faker) {

    $setor = Setor::all()->random();
    return [
        'setores_id'        => $setor,
        'destrito' =>   $faker->city,
        'posto_administrativo' =>  $faker->city,
        'localidade' => $faker->city,
        'bairro' => $faker->city,
        'endereco' => $faker->address,
        'classificador_territorial' => $faker->citySuffix,
    ];
});

