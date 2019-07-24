<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniveridadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uges')->insert([
            [
                "codigo" => "012563522",
                'endereco'      => 'Av. Alredo Lawley',
                'designacao'    => 'Univeridade Zambeze',
                'provincia'     => 'Sofala',
                'destrito'      => 'Beira',
                'posto_administrativo' => 'Beira',
                'localidade'    => 'Beira',
                'bairro'        => 'Matacuane',
                'classificador_territorial'     => 'SF',
            ],
        ]);
    }
}
