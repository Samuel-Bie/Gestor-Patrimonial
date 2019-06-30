<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Universidade\Universidade;

class UniveridadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universidade')->insert([
            [
                'nome'      => 'Univeridade Zambeze',
                'endereco'  => 'Av. Alredo Lawley',
            ],
        ]);

        $universidade = Universidade::first();

        DB::table('uges')->insert([
            [
                'endereco'      => $universidade->endereco,
                'designacao'    => $universidade->nome,
                'provincia'     => 'Sofala',
                'destrito'      => 'Beira',
                'posto_administrativo' => 'Beira',
                'localidade'    => 'Beira',
                'bairro'        => 'Matacuane',
                'classificador_territorial'     => 'SF',
                'universidade_id'   => $universidade->id(),
            ],
        ]);
    }
}
