<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio\Tipo\Imovel;
use App\Http\Resources\Patrimonio\Extensions\Imovel\ImovelCollection;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::paginate();
        return (new ImovelCollection($imoveis));
    }

    public function show(Imovel $imovel)
    {
        //
    }

    public function destroy(Imovel $imovel)
    {
        //
    }
}
