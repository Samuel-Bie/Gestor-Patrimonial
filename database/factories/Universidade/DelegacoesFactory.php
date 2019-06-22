<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Delegacoes;
use Faker\Generator as Faker;
use App\Models\Universidade;

$factory->define(Delegacoes::class, function (Faker $faker) {
    return [
        'nome' => $faker->words(2),
        'universidade_iduniversidade' => Universidade::all()->random()
    ];
});
