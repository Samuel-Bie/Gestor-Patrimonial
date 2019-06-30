<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Patrimonio\Tools\ClassificadorGeral;
use Faker\Generator as Faker;

$factory->define(ClassificadorGeral::class, function (Faker $faker) {
    return [
        "codigo"        => $faker->unique()->randomNumber(5),
        "designacao"    =>$faker->name
    ];
});
