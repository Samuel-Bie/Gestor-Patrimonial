<?php
namespace App\Http\Controllers\Patrimonio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Http\Resources\Patrimonio\Informacao\InformacaoBasicResource;

class InformacaoController extends Controller
{
    public function show(Patrimonio $patrimonio)
    {
        return new InformacaoBasicResource($patrimonio->informacao);
    }

    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }
}
