<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\Setor;
use App\Models\Universidade\Delegacao;

$factory->define(Setor::class, function (Faker $faker) {
    return [
        'nome' => $faker->sentence(2),
        'delegacoes_id' => Delegacao::all()->random()
    ];
});