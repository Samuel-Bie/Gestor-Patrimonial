<?php


use App\Models\User\User;
use App\Models\Instituicao\UGB;
use App\Models\User\Permissoes;
use Illuminate\Database\Seeder;
use App\Models\Instituicao\Setor;
use App\Models\Patrimonio\Ficheiro;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Livro;
use App\Models\Patrimonio\Tipo\Movel;
use App\Models\Patrimonio\Abate\Abate;
use App\Models\Patrimonio\Localizacao;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Models\Patrimonio\Tipo\Veiculo;
use App\Models\Patrimonio\Info\AdicionalGeral;
use App\Models\Patrimonio\Info\AdicionalImovel;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Models\Patrimonio\Transferencia\Transferencia;

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
                factory(Patrimonio::class, 10)->create()->each(function ($patrimonio) {
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

                factory(Patrimonio::class, 10)->create()->each(function ($patrimonio) {
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


                factory(Patrimonio::class, 10)->create()->each(function ($patrimonio) {
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

                factory(Patrimonio::class, 10)->create()->each(function ($patrimonio) {
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



            /* Manutencao */
                Patrimonio::inRandomOrder()->take(20)->get()
                ->each(function ($patrimonio) {
                    $patrimonio->manutencoes()->saveMany(
                        factory(Manutencao::class, rand(1,4))->make()
                    );
                    $patrimonio->manutencoes->each(function($manutencao){
                        $manutencao->ficheiros()->saveMany(
                            factory(Ficheiro::class, 5)->make()
                        );
                    });
                });
            /* Manutencao */

            /* Movimentacao */
                Patrimonio::inRandomOrder()->take(20)->get()
                ->each(function ($patrimonio) {
                    $patrimonio->movimentacoes()->saveMany(
                        factory(Movimentacao::class, rand(1,4))->make()
                    );
                    $patrimonio->movimentacoes->each(function($movimentacao){
                        $movimentacao->ficheiros()->saveMany(
                            factory(Ficheiro::class, 5)->make()
                        );
                    });
                });
            /* Movimentacao */

            /* Abate */
                Patrimonio::inRandomOrder()->take(10)->get()
                ->each(function ($patrimonio) {
                    $patrimonio->abate()->save(
                        factory(Abate::class, 1)->make()->first()
                    );

                    $patrimonio->abate->ficheiros()->saveMany(
                        factory(Ficheiro::class, 5)->make()
                    );
                });
            /* Abate */

            /* Transferencia */
                Patrimonio::inRandomOrder()->take(10)->get()
                ->each(function ($patrimonio) {
                    $patrimonio->transferencia()->save(
                        factory(Transferencia::class, 1)->make()->first()
                    );

                    $patrimonio->transferencia->ficheiros()->saveMany(
                        factory(Ficheiro::class, 5)->make()
                    );
                });
            /* Transferencia */
        /* Patrimonio */
    }
}