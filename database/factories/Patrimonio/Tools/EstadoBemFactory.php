<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Patrimonio\EstadoBem;
use Faker\Generator as Faker;

$factory->define(EstadoBem::class, function (Faker $faker) {
    return [
        "codigo"        => $faker->postcode,
        "designacao"    => $faker->word
    ];
});
