<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Setor;
use App\Models\Departamento;
use Faker\Generator as Faker;

$factory->define(Setor::class, function (Faker $faker) {
    return [
        'nome' => $faker->words(2),
        'delegacoes_iddelegacao' => Departamento::all()->random()
    ];
});
