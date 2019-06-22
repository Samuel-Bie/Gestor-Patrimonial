<?php

use App\Models\User\User;
use App\Models\User\Cargo;
use Illuminate\Database\Seeder;
use App\Models\User\Permissoes;
use App\Models\Delegacoes;
use App\Models\Departamento;
use App\Models\Setor;
use App\Models\UGB;
use App\Model\UGE;
use App\Models\Universidade;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Models\Patrimonio\Tools\EstadoBem;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\InformacaoAdicional;
use App\Models\Patrimonio\DadosDeLocalizacao;
use App\Models\Patrimonio\Ficheiro;
use App\Models\Patrimonio\Abate\DadosAbate;
use App\Models\Patrimonio\Manutencao\Manutencao;
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
            factory(Cargo::class, 5)->create();
        /* User */

        /* Universiadade */
            factory(Universidade::class, 1)->create();
            factory(UGE::class, 1)->create();
            factory(Delegacoes::class, 6)->create();
            factory(UGB::class, 6)->create();
            factory(Departamento::class, 20)->create();
            factory(Setor::class, 10)->create();

            factory(Permissoes::class, 15)->create();
        /* Universiadade */

        /* Patrimonio */
            /* Tools */
                factory(ClassificadorGeral::class, 1000)->create();
                factory(EstadoBem::class, 5)->create();
                factory(FormaDeAquisicao::class, 10)->create();
            /* Tools */

            /* Core */
                factory(Patrimonio::class, 10)->create();
                factory(InformacaoAdicional::class, 10)->create();
                factory(DadosDeLocalizacao::class, 10)->create();
                factory(Ficheiro::class, 10)->create();
            /* Core */

            /* Abate */
                factory(DadosAbate::class, 4)->create();

            /* Abate */

            /* Manutencao */
                factory(Manutencao::class, 4)->create();
            /* Manutencao */

            /* Movimentacao */
                factory(Movimentacao::class, 4)->create();
            /* Movimentacao */

            /* Transferencia */
                factory(DadosTransferencia::class, 2)->create();
            /* Transferencia */

        /* Patrimonio */
    }
}
