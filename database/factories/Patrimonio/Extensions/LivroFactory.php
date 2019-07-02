<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Livro;

$factory->define(Livro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(3),
        'assunto' => $faker->sentence(3),
        'edicao' => $faker->randomNumber(1),
        'paginas' => $faker->randomNumber(3),
        'volumes' => $faker->randomNumber(1),
        'autor' => $faker->sentence(3),
        'editora' => $faker->sentence(3),

    ];
});
