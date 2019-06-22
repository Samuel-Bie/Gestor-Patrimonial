<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Patrimonio\InformacaoAdicional;
use Faker\Generator as Faker;
use App\Models\Patrimonio\Patrimonio;

$factory->define(InformacaoAdicional::class, function (Faker $faker) {
    return [
        //


        "fornecedor"    => $faker->company,
        "nuit"          => $faker->vat,
        "endereco"      => $faker->address,
        "cidade"        => $faker->city,
        "tipo_comprovativo" => $faker->word,
        "nr_comprovativo" => $faker->numberBetween(1000, 800000),
        "assistencia_tecnica" => $faker->boolean,
        "garantia" => $faker->randomDigitNotNull,
        "utilizador" => $faker->name,
        "obs" => $faker->text,
        "patrimonio_id" => Patrimonio::all()->random()

    ];
});
