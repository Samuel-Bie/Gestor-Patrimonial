<?php
namespace App\Http\Controllers\Patrimonio\Extensions;

use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Http\Resources\Patrimonio\Extensions\Imovel\ImovelCollection;
use App\Http\Resources\Patrimonio\Extensions\Imovel\ImovelBasicResource;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::paginate();
        return (new ImovelCollection($imoveis));
    }

    public function show(Imovel $imovel)
    {
        return (new ImovelBasicResource($imovel));
    }

    public function destroy(Imovel $imovel)
    {
        //
    }
}
