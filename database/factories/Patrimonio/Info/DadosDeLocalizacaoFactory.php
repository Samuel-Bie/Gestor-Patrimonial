<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\UGB;
use App\Models\Universidade\UGE;
use App\Models\Universidade\Setor;
use App\Models\Universidade\Departamento;
use App\Models\Patrimonio\Localizacao;

$factory->define(Localizacao::class, function (Faker $faker) {

    $ugb = UGB::all()->random();

    if ($faker->boolean) {
        $setor = null;
        $departamento = Departamento::all()->random();
    } else {
        $setor = Setor::all()->random();
        $departamento = null;
    }
    return [
        'ugbs_id'           => $ugb,
        'uges_id'           => UGE::all()->random(),
        'setores_id'        => $setor,
        'departamentos_id'   => $departamento
    ];
});