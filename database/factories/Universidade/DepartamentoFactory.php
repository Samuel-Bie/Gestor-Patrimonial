<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\Departamento;
use App\Models\Universidade\Delegacao;

$factory->define(Departamento::class, function (Faker $faker) {
    return [
        "codigo" => $faker->unique()->randomNumber(6),
        'nome' => $faker->sentence(2),
        'delegacoes_id' => Delegacao::all()->random()
    ];
});