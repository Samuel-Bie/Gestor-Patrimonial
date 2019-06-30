<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Universidade\UGB;
use App\Models\Universidade\UGE;
use App\Models\Universidade\Setor;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Universidade\Departamento;
use App\Models\Patrimonio\DadosDeLocalizacao;

$factory->define(DadosDeLocalizacao::class, function (Faker $faker) {

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
        'patrimonio_id'     => Patrimonio::doesntHave('localizacao')->get()->random(),
        'setores_id'        => $setor,
        'departamentos_id'   => $departamento
    ];
});