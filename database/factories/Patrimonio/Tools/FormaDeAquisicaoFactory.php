<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use Faker\Generator as Faker;

$factory->define(FormaDeAquisicao::class, function (Faker $faker) {
    return [
        "codigo"        => $faker->postcode,
        "designacao"    => $faker->word
    ];
});
