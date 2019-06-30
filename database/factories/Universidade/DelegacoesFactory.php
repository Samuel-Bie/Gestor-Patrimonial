<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\Delegacoes;
use App\Models\Universidade\Universidade;

$factory->define(Delegacoes::class, function (Faker $faker) {
    $uni = Universidade::all()->random();
    return [
        'nome' => $faker->sentence(2),
        'universidade_id' => $uni,
    ];
});