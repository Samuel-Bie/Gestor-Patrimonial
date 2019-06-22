<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Universidade;
use Faker\Generator as Faker;

$factory->define(Universidade::class, function (Faker $faker) {
    return [
        'nome'      => $faker->name,
        'endereco'  => $faker->address,
    ];
});
