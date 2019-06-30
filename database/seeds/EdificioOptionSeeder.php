<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdificioOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_dominio')->insert([
            [
                'nome'      => 'Dominio Publico',
            ], [
                'nome'      => 'Dominio Privado',
            ],
        ]);

        DB::table('tipo_edificio')->insert([
            [
                'nome'      => 'Imovel Autonomo',
            ], [
                'nome'      => 'Agrupamento Imobiliario',
            ], [
                'nome'      => 'Agrupamento de infraestruturas',
            ],
        ]);

        DB::table('tipo_imovel')->insert([
            [
                'nome'      => 'Urbano',
            ], [
                'nome'      => 'Rustico',
            ],
        ]);
    }
}