<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Instituicao\UGB;
use App\Models\Instituicao\UGE;

$factory->define(UGB::class, function (Faker $faker) {
    $nomes = [
        'FCT',
        'FCSH',
        'FCS',
        'FEARN',
        'CETIC',
        'REITORIA',
        'WWW',
        'FEAF',
        'FCA',
    ];
    return [
        "codigo" => $faker->unique()->randomNumber(6),
        "designacao"    => $nomes[random_int(0,8)],
        'provincia'     => $faker->city,
        'destrito'      => $faker->city,
        "classificador_territorial" => $faker->city,
        'posto_administrativo'      => $faker->city,
        'localidade'    => $faker->city,
        'bairro'        => $faker->country,
        'endereco'      => $faker->address,
        'uges_id' => UGE::all()->random()
    ];
});