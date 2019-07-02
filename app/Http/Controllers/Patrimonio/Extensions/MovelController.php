<?php
namespace App\Http\Controllers\Patrimonio\Extensions;

use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Tipo\Movel;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Http\Resources\Patrimonio\Extensions\Movel\MovelCollection;

class MovelController extends Controller
{

    public function index()
    {
        $moveis = Movel::paginate();
        return (new MovelCollection($moveis));
    }

    public function show(Movel $movel)
    {
        //
    }
    public function destroy(Movel $movel)
    {
        //
    }
}
