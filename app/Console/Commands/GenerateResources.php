<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gerar:recursos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gerador de API Recursos (Basic, General, Collection)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        Artisan::call('make:resource User/User/UserBasicResource');
        Artisan::call('make:resource User/User/UserGeneralResource');
        Artisan::call('make:resource User/User/UserCollection');


        Artisan::call('make:resource User/Cargo/CargoBasicResource');
        Artisan::call('make:resource User/Cargo/CargoGeneralResource');
        Artisan::call('make:resource User/Cargo/CargoCollection');

        Artisan::call('make:resource User/Permissao/PermissaoBasicResource');
        Artisan::call('make:resource User/Permissao/PermissaoGeneralResource');
        Artisan::call('make:resource User/Permissao/PermissaoCollection');

        Artisan::call('make:resource Universidade/Setor/SetorBasicResource');
        Artisan::call('make:resource Universidade/Setor/SetorGeneralResource');
        Artisan::call('make:resource Universidade/Setor/SetorCollection');

        Artisan::call('make:resource Universidade/UGE/UGEBasicResource');
        Artisan::call('make:resource Universidade/UGE/UGEGeneralResource');
        Artisan::call('make:resource Universidade/UGE/UGECollection');

        Artisan::call('make:resource Universidade/UGB/UGBBasicResource');
        Artisan::call('make:resource Universidade/UGB/UGBGeneralResource');
        Artisan::call('make:resource Universidade/UGB/UGBCollection');

        Artisan::call('make:resource Universidade/Universidade/UniversidadeBasicResource');
        Artisan::call('make:resource Universidade/Universidade/UniversidadeGeneralResource');
        Artisan::call('make:resource Universidade/Universidade/UniversidadeCollection');

        Artisan::call('make:resource Universidade/Departamento/DepartamentoBasicResource');
        Artisan::call('make:resource Universidade/Departamento/DepartamentoGeneralResource');
        Artisan::call('make:resource Universidade/Departamento/DepartamentoCollection');

        Artisan::call('make:resource Universidade/Delegacao/DelegacaoBasicResource');
        Artisan::call('make:resource Universidade/Delegacao/DelegacaoGeneralResource');
        Artisan::call('make:resource Universidade/Delegacao/DelegacaoCollection');

        Artisan::call('make:resource Patrimonio/Patrimonio/PatrimonioBasicResource');
        Artisan::call('make:resource Patrimonio/Patrimonio/PatrimonioGeneralResource');
        Artisan::call('make:resource Patrimonio/Patrimonio/PatrimonioCollection');

        Artisan::call('make:resource Patrimonio/Informacao/InformacaoBasicResource');
        Artisan::call('make:resource Patrimonio/Informacao/InformacaoGeneralResource');
        Artisan::call('make:resource Patrimonio/Informacao/InformacaoCollection');

        Artisan::call('make:resource Patrimonio/Ficheiro/FicheiroBasicResource');
        Artisan::call('make:resource Patrimonio/Ficheiro/FicheiroGeneralResource');
        Artisan::call('make:resource Patrimonio/Ficheiro/FicheiroCollection');

        Artisan::call('make:resource Patrimonio/Operations/Transferencia/TransferenciaBasicResource');
        Artisan::call('make:resource Patrimonio/Operations/Transferencia/TransferenciaGeneralResource');
        Artisan::call('make:resource Patrimonio/Operations/Transferencia/TransferenciaCollection');

        Artisan::call('make:resource Patrimonio/Tools/FormaDeAquisicao/FormaDeAquisicaoBasicResource');
        Artisan::call('make:resource Patrimonio/Tools/FormaDeAquisicao/FormaDeAquisicaoGeneralResource');
        Artisan::call('make:resource Patrimonio/Tools/FormaDeAquisicao/FormaDeAquisicaoCollection');

        Artisan::call('make:resource Patrimonio/Tools/ClassificadorGeral/ClassificadorGeralBasicResource');
        Artisan::call('make:resource Patrimonio/Tools/ClassificadorGeral/ClassificadorGeralGeneralResource');
        Artisan::call('make:resource Patrimonio/Tools/ClassificadorGeral/ClassificadorGeralCollection');

        Artisan::call('make:resource Patrimonio/Operations/Movimentacao/MovimentacaoBasicResource');
        Artisan::call('make:resource Patrimonio/Operations/Movimentacao/MovimentacaoGeneralResource');
        Artisan::call('make:resource Patrimonio/Operations/Movimentacao/MovimentacaoCollection');

        Artisan::call('make:resource Patrimonio/Operations/Manutencao/ManutencaoBasicResource');
        Artisan::call('make:resource Patrimonio/Operations/Manutencao/ManutencaoGeneralResource');
        Artisan::call('make:resource Patrimonio/Operations/Manutencao/ManutencaoCollection');

        Artisan::call('make:resource Patrimonio/Operations/Abate/AbateBasicResource');
        Artisan::call('make:resource Patrimonio/Operations/Abate/AbateGeneralResource');
        Artisan::call('make:resource Patrimonio/Operations/Abate/AbateCollection');


        Artisan::call('make:resource Patrimonio/Extensions/Veiculo/VeiculoBasicResource');
        Artisan::call('make:resource Patrimonio/Extensions/Veiculo/VeiculoGeneralResource');
        Artisan::call('make:resource Patrimonio/Extensions/Veiculo/VeiculoCollection');

        Artisan::call('make:resource Patrimonio/Extensions/Movel/MovelBasicResource');
        Artisan::call('make:resource Patrimonio/Extensions/Movel/MovelGeneralResource');
        Artisan::call('make:resource Patrimonio/Extensions/Movel/MovelCollection');

        Artisan::call('make:resource Patrimonio/Extensions/Livro/LivroBasicResource');
        Artisan::call('make:resource Patrimonio/Extensions/Livro/LivroGeneralResource');
        Artisan::call('make:resource Patrimonio/Extensions/Livro/LivroCollection');

        Artisan::call('make:resource Patrimonio/Extensions/Imovel/ImovelBasicResource');
        Artisan::call('make:resource Patrimonio/Extensions/Imovel/ImovelGeneralResource');
        Artisan::call('make:resource Patrimonio/Extensions/Imovel/ImovelCollection');

        Artisan::call('make:resource Patrimonio/Extensions/Imovel/Samuel');

        $this->info('Recursos Configurados');
    }
}