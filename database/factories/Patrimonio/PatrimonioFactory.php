<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\User\User;
use Faker\Generator as Faker;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tools\EstadoAquisicao;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Models\Patrimonio\Tools\EstadoConservacao;
use App\Models\Patrimonio\Tools\ClassificadorGeral;

$factory->define(Patrimonio::class, function (Faker $faker) {
    return [
        "nip"       => $faker->unique()->buildingNumber,
        "classificador_geral_id" => ClassificadorGeral::all()->random(),
        "formas_aquisicao_id"    => FormaDeAquisicao::all()->random(),
        "estado_aquisicao_id"    => EstadoAquisicao::all()->random(),
        "estado_conservacao_id"  => EstadoConservacao::all()->random(),
        "data_aquisicao"         => $faker->dateTimeThisYear,
        "valor_aquisicao"        => $faker->randomFloat(2,3,6),
        "users_id"               => User::all()->random()
    ];
});