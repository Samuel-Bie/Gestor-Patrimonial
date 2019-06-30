<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Info\AdicionalImovel;
use App\Models\Patrimonio\Tipo\Imovel;

$factory->define( AdicionalImovel::class, function (Faker $faker) {
    $imovel = Imovel::doesntHave('info')->get()->random();
    return [
        'conservatoria_registro_predial'=> $faker->sentence(3),
        'nr_registro_predial'           => $faker->randomNumber(3),
        'folhas_registro_predial'       => $faker->randomNumber(3),
        'livro_registro_predial'        => $faker->sentence(2),
        'ano_registro'                  => $faker->year(),
        'direcao_area_fiscal'           => $faker->sentence(2),
        'nr_matriz_predial'             => $faker->randomNumber(2),
        'folhas_matriz_predial'         => $faker->randomNumber(2),
        'ano_matriz_predial'            => $faker->year(),
        'livro_matriz_predial'          => $faker->sentence(2),
        'imoveis_id'                     => $imovel,
    ];
});