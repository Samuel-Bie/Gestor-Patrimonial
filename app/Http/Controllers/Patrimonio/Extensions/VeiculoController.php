<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio\Movimentacao\Movimentacao;
use Illuminate\Http\Request;
use App\Models\Patrimonio\Tipo\Veiculo;

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
