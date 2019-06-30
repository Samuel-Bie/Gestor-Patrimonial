<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Movel;

$factory->define(Movel::class, function (Faker $faker) {
    return [
        'marca' => $faker->sentence(2),
        'nr_serie' => $faker->creditCardNumber(),
        'modelo' => $faker->word,
        'comprimento' => $faker->randomFloat(2,1,2),
        'largura' =>$faker->randomFloat(2,1,2),
        'cor' => $faker->colorName,
        'material' => $faker->word,
        'patrimonio_id'     => Patrimonio::
            doesntHave('imovel')
            ->doesntHave('veiculo')
            ->doesntHave('livro')
            ->doesntHave('movel')
            ->get()
        ->random(),
    ];
});
