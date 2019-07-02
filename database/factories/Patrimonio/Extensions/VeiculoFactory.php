<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Veiculo;

$factory->define(Veiculo::class, function (Faker $faker) {
    return [
        'combustivel' => $faker->word,
        'cilindrada' => $faker->randomFloat(2,2,4),
        'marca' => $faker->sentence(2),
        'modelo' => $faker->word,
        'matricula' => $faker->word,
        'nr_motor' => $faker->word,
        'nr_portas' => $faker->randomNumber(1),
        'matricula_nova' => $faker->word,
        'nr_chassis' => $faker->word,
        'ano_fabrico' => $faker->year(),
        'lotacao' => $faker->randomNumber(1),
        'tonelagem' => $faker->randomFloat(2,1,2),
        'cor' => $faker->colorName,

    ];
});
