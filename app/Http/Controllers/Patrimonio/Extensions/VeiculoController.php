<?php
namespace App\Http\Controllers\Patrimonio\Extensions;


use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Tipo\Veiculo;
use App\Models\Patrimonio\Movimentacao\Movimentacao;

class VeiculoController extends Controller
{

    public function index()
    {
        $veiculos = Veiculo::paginate();
        return (new VeiculoCollection($veiculos));
    }


    public function show(Veiculo $veiculo)
    {
        //
    }


    public function destroy(Veiculo $veiculo)
    {
        //
    }
}
