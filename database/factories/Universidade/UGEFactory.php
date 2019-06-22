<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\UGE;
use App\Models\Universidade;
use Faker\Generator as Faker;

$factory->define(UGE::class, function (Faker $faker) {
    $universidade = Universidade::all()->random();
    return [
        `designacao`    => $universidade->nome,
        `provincia`     => $faker->city,
        `destrito`      => $faker->city,
        `posto_administrativo` => $faker->city,
        `localidade`    => $faker->city,
        `bairro`        => $faker->country,
        `endereco`      => $faker->address,
        `classificador_territorial`     => $faker->postcode,
        `universidade_iduniversidade`   => $universidade
    ];
});
