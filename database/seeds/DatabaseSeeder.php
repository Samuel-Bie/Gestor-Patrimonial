<?php


use App\Models\User\User;
use App\Models\User\Permissoes;
use Illuminate\Database\Seeder;
use App\Models\Instituicao\UGB;
use App\Models\Instituicao\Setor;
use App\Models\Patrimonio\Ficheiro;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Livro;
use App\Models\Patrimonio\Tipo\Movel;
use App\Models\Patrimonio\Localizacao;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Models\Patrimonio\Tipo\Veiculo;
use App\Models\Patrimonio\Info\AdicionalGeral;
use App\Models\Patrimonio\Info\AdicionalImovel;
use App\Models\Patrimonio\Tools\ClassificadorGeral;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* User */
            factory(User::class, 5)->create();
        /* User */

        /* Universiadade */
            $this->call([
                CargoSeeder::class,
                UniveridadeSeeder::class,
            ]);

            factory(UGB::class, 6)->create()->each(function($ugb) {
                $ugb->setores()->saveMany(
                    factory(Setor::class, 4)->make()
                );
            });
            factory(Permissoes::class, 15)->create();
        /* Universiadade */


        /* Patrimonio */
            /* Tools */
                $this->call([
                    EdificioOptionSeeder::class,
                    PatrimonioOptionSeeder::class
                ]);
                factory(ClassificadorGeral::class, 1000)->create();
            /* Tools */


            /* Core */
                factory(Patrimonio::class, 5)->create()->each(function ($patrimonio) {
                    $patrimonio->informacao()->save(
                        factory(AdicionalGeral::class, 1)->make()->first()
                    );

                    $patrimonio->localizacao()->save(
                        factory(Localizacao::class, 1)->make()->first()
                    );
                    $patrimonio->imovel()->save(
                        factory(Imovel::class, 1)->make()->first()
                    );
                    $patrimonio->ficheiros()->saveMany(
                        factory(Ficheiro::class, 5)->make()
                    );
                })->each(function ($patrimonio) {
                    $patrimonio->imovel->info()->save(
                        factory(AdicionalImovel::class, 1)->make()->first()
                    );
                });

                factory(Patrimonio::class, 5)->create()->each(function ($patrimonio) {
                    $patrimonio->informacao()->save(
                        factory(AdicionalGeral::class, 1) ->make()->first()
                    );

                    $patrimonio->localizacao()->save(
                        factory(Localizacao::class, 1)->make()->first()
                    );
                    $patrimonio->veiculo()->save(
                        factory(Veiculo::class, 1)->make()->first()
                    );
                    $patrimonio->ficheiros()->saveMany(
                        factory(Ficheiro::class, 5)->make()
                    );
                });


                factory(Patrimonio::class, 5)->create()->each(function ($patrimonio) {
                    $patrimonio->informacao()->save(
                        factory(AdicionalGeral::class, 1) ->make()->first()
                    );

                    $patrimonio->localizacao()->save(
                        factory(Localizacao::class, 1)->make()->first()
                    );
                    $patrimonio->livro()->save(
                        factory(Livro::class, 1)->make()->first()
                    );
                    $patrimonio->ficheiros()->saveMany(
                        factory(Ficheiro::class, 5)->make()
                    );
                });

                factory(Patrimonio::class, 5)->create()->each(function ($patrimonio) {
                    $patrimonio->informacao()->save(
                        factory(AdicionalGeral::class, 1) ->make()->first()
                    );

                    $patrimonio->localizacao()->save(
                        factory(Localizacao::class, 1)->make()->first()
                    );
                    $patrimonio->movel()->save(
                        factory(Movel::class, 1)->make()->first()
                    );
                    $patrimonio->ficheiros()->saveMany(
                        factory(Ficheiro::class, 5)->make()
                    );
                });
            /* Core */

            /* Abate */
                // factory(Abate::class, 4)->create();
            /* Abate */

            /* Manutencao */
                // factory(Manutencao::class, 4)->create();
            /* Manutencao */

            /* Movimentacao */
                // factory(Movimentacao::class, 4)->create();
            /* Movimentacao */

            /* Transferencia */
                // factory(Transferencia::class, 2)->create();
            /* Transferencia */

        /* Patrimonio */
    }
}