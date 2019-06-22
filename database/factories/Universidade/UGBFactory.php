<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\UGB;
use Faker\Generator as Faker;
use App\Models\Delegacoes;

$factory->define(UGB::class, function (Faker $faker) {
    $delegacao = Delegacoes::all()->random();
    return [
        "designacao"    => $delegacao->nome,
        'provincia'     => $faker->city,
        'destrito'      => $faker->city,
        "classificador_territorial" => $faker->city,
        `posto_administrativo`      => $faker->city,
        `localidade`    => $faker->city,
        `bairro`        => $faker->country,
        `endereco`      => $faker->address,
        'delegacoes_iddelegacao' => $delegacao
    ];
});
