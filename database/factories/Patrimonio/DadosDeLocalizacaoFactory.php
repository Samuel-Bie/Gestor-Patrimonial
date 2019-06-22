<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\UGE;
use App\Models\UGB;
use Faker\Generator as Faker;
use App\Models\Patrimonio\DadosDeLocalizacao;
use App\Models\Patrimonio\Patrimonio;

$factory->define(DadosDeLocalizacao::class, function (Faker $faker) {
    $ugb = UGB::all()->random();
    return [

        'ugbs_idugbs' => $ugb,
        'uges_iduges' => UGE::all()->random(),
        'patrimonio_id' => Patrimonio::all(),
        'setores_id' => $ugb->setores->random(),
        'depatamentos_iddepatamento' =>Dados::all()->random()
    ];
});
