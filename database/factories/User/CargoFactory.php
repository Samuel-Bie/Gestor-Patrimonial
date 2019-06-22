<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {
    return [
        `nome`  => $faker->word,
        `nivel` => $faker->numberBetween(0,5),
    ];
});
