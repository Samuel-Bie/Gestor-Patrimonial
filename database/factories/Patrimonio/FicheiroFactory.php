<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Ficheiro;

$factory->define(Ficheiro::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(),
    ];
});