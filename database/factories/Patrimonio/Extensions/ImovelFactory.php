<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Models\Patrimonio\Tipo\Imovel\TipoImovel;
use App\Models\Patrimonio\Tipo\Imovel\TipoDominio;
use App\Models\Patrimonio\Tipo\Imovel\TipoEdificio;

$factory->define(Imovel::class, function (Faker $faker) {
    return [
        'tipo_imovel_id'    => TipoImovel::all()->random(),
        'tipo_edificio_id'  => TipoEdificio::all()->random(),
        'tipo_dominio_id'   => TipoDominio::all()->random(),
        'nr_divisoes'   => $faker->randomNumber(1),
        'nr_pisos'      => $faker->randomNumber(1),
        'cor'           => $faker->colorName,
        'area_cobertura'    => $faker->randomFloat(2,2,3),
        'area_terreno'      => $faker->randomFloat(2,2,3),
        'elevadores'        => $faker->boolean,
        'sistema_incendio'  => $faker->boolean,
        'ano_construcao'    => $faker->year(),
    ];
});
