<?php
namespace App\Http\Controllers\Patrimonio\Manutencao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Manutencao\Manutencao;
use App\Http\Resources\Patrimonio\Operations\Manutencao\ManutencaoCollection;

class ManutencaoController extends Controller
{

    public function index(Patrimonio $patrimonio)
    {
        $manutencoes = $patrimonio->manutencoes()->paginate();
        return (new ManutencaoCollection($manutencoes));
    }


    public function store(Request $request, Patrimonio $patrimonio)
    {
        //
    }


    public function show(Manutencao $manutencao)
    {
        //
    }

    public function update(Request $request, Manutencao $manutencao)
    {
        //
    }


    public function destroy(Manutencao $manutencao)
    {
        //
    }
}
