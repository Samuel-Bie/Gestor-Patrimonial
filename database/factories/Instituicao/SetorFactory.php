<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Instituicao\Setor;

$factory->define(Setor::class, function (Faker $faker) {

    $nomes = [
        'Contabilidade',
        'Recursos Humanos',
        'Administracao e Finacas',
        'Administracao patrimonial',
        'Comunicacao e imagem',
        'Reitoria',
        'Registro academico',
        'Secretaria',
        'CETIC',
    ];
    return [
        "codigo"    => $faker->unique()->randomNumber(6),
        'nome'      => $nomes[random_int(0,8)],
    ];
});