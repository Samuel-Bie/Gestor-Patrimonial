<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\UGB;
use App\Models\Universidade\Delegacao;

$factory->define(UGB::class, function (Faker $faker) {
    $delegacao = Delegacao::doesntHave('ugb')->get()->random();
    return [
        "codigo" => $faker->unique()->randomNumber(6),
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