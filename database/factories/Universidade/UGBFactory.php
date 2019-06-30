<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\UGB;
use App\Models\Universidade\Delegacoes;

$factory->define(UGB::class, function (Faker $faker) {
    $delegacao = Delegacoes::doesntHave('ugb')->get()->random();
    return [
        "designacao"    => $delegacao->nome,
        'provincia'     => $faker->city,
        'destrito'      => $faker->city,
        "classificador_territorial" => $faker->city,
        'posto_administrativo'      => $faker->city,
        'localidade'    => $faker->city,
        'bairro'        => $faker->country,
        'endereco'      => $faker->address,
        'delegacoes_id' => $delegacao
    ];
});