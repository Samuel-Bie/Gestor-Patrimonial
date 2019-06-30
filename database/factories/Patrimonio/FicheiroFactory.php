<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Ficheiro;
use App\Models\Patrimonio\Patrimonio;

$factory->define(Ficheiro::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(),
        'patrimonio_id' => Patrimonio::doesntHave('ficheiros')->get()->random()
    ];
});