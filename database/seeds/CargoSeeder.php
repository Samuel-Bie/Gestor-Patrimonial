<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo')->insert([
            [
                'nome'      => 'Administrador Geral',
                'nivel'  => 1,
            ], [
                'nome'      => 'Administradaor Local',
                'nivel'  => 2,
            ], [
                'nome'      => 'Normal',
                'nivel'  => 3,
            ],
        ]);

    }
}