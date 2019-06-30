<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatrimonioOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formas_aquisicao')->insert([
            [
                'codigo'        => '01',
                'designacao'    => 'Compra'
            ], [
                'codigo'        => '02',
                'designacao'    => 'Transferencia'
            ], [
                'codigo'        => '03',
                'designacao'    => 'Troca ou Permuta'
            ], [
                'codigo'        => '04',
                'designacao'    => 'Expropriacao'
            ], [
                'codigo'        => '05',
                'designacao'    => 'Doação'
            ], [
                'codigo'        => '06',
                'designacao'    => 'Herança'
            ], [
                'codigo'        => '07',
                'designacao'    => 'Lagado ou perda a favor do estado'
            ], [
                'codigo'        => '08',
                'designacao'    => 'Doação em cumprimento'
            ], [
                'codigo'        => '09',
                'designacao'    => 'Construção'
            ], [
                'codigo'        => '10',
                'designacao'    => 'Produção'
            ], [
                'codigo'        => '11',
                'designacao'    => 'Reversão'
            ], [
                'codigo'        => '12',
                'designacao'    => 'Outras formas juridicas'
            ],
        ]);

        DB::table('estado_aquisicao')->insert([
            [
                'designacao' => 'Novo'
            ], [
                'designacao' => 'Usado'
            ],
        ]);

        DB::table('estado_conservacao')->insert([
            [
                'designacao' => 'Muito Bom'
            ], [
                'designacao' => 'Bom'
            ], [
                'designacao' => 'Mau'
            ],
        ]);
    }
}