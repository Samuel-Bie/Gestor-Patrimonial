<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Patrimonio\Patrimonio;
use Faker\Generator as Faker;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Models\Patrimonio\Tools\EstadoBem;

$factory->define(Patrimonio::class, function (Faker $faker) {
    return [
        "nip"       => $faker->buildingNumber,
        "marca"     => $faker->words(1),
        "nr_serie"  => $faker->md5,
        "modelo"    => $faker->words(2),
        "comprimento"   => $faker->numberBetween(5,100),
        "largura"       => $faker->numberBetween(5,100),
        "cor"       => $faker->colorName,
        "material"  => $faker->word,
        "classificador_geral_id"    => ClassificadorGeral::all()->random(),
        "formas_aquisicao_id"       => FormaDeAquisicao::all()->random(),
        "estado_aquisicao_bem_id"   => EstadoBem::all()->random(),
        "estado_conservacao_bem_id" => EstadoBem::all()->random(),
        "data_aquisicao"    => $faker->dateTimeThisYear,
        "valor_aquisicao"   => $faker->randomFloat(5, 10)
    ];
});
