<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Info\AdicionalGeral;

$factory->define( AdicionalGeral::class,function (Faker $faker) {
    return [
        "fornecedor"    => $faker->company,
        "nuit"          => $faker->numberBetween(400000000, 900000000),
        "endereco"      => $faker->address,
        "cidade"        => $faker->city,
        "tipo_comprovativo" => $faker->word,
        "nr_comprovativo" => $faker->numberBetween(1000, 800000),
        "assistencia_tecnica" => $faker->boolean,
        "garantia" => $faker->randomDigitNotNull,
        "utilizador" => $faker->name,
        "obs" => $faker->text,
        "patrimonio_id" =>  Patrimonio::doesntHave('informacao')->get()->random(),
        "seguro" => $faker->boolean,
    ];
});