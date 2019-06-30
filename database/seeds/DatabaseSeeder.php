<?php


use App\Models\User\User;
use App\Models\User\Permissoes;
use Illuminate\Database\Seeder;
use App\Models\Universidade\UGB;
use App\Models\Universidade\Setor;
use App\Models\Patrimonio\Ficheiro;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Livro;
use App\Models\Patrimonio\Tipo\Movel;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Models\Patrimonio\Tipo\Veiculo;
use App\Models\Universidade\Delegacoes;
use App\Models\Universidade\Departamento;
use App\Models\Patrimonio\Abate\DadosAbate;
use App\Models\Patrimonio\DadosDeLocalizacao;
use App\Models\Patrimonio\Info\AdicionalGeral;
use App\Models\Patrimonio\Info\AdicionalImovel;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Models\Patrimonio\Transferencia\DadosTransferencia;

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

            factory(Delegacoes::class, 6)->create();
            factory(UGB::class, 6)->create();
            factory(Departamento::class, 20)->create();
            factory(Setor::class, 10)->create();
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
                factory(Patrimonio::class, 20)->create();
                factory(AdicionalGeral::class, 20)->create();
                factory(DadosDeLocalizacao::class, 20)->create();
                factory(Ficheiro::class, 20)->create();
                /* Patrimonio extensions */
                    factory(Imovel::class, 5)->create();
                    factory(AdicionalImovel::class, 5)->create();

                    factory(Livro::class, 5)->create();
                    factory(Movel::class, 5)->create();
                    factory(Veiculo::class, 5)->create();

                /* Patrimonio extensions */
            /* Core */

            /* Abate */
                // factory(DadosAbate::class, 4)->create();
            /* Abate */

            /* Manutencao */
                // factory(Manutencao::class, 4)->create();
            /* Manutencao */

            /* Movimentacao */
                // factory(Movimentacao::class, 4)->create();
            /* Movimentacao */

            /* Transferencia */
                // factory(DadosTransferencia::class, 2)->create();
            /* Transferencia */

        /* Patrimonio */
    }
}