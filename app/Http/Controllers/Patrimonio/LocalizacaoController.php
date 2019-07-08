<?php
namespace App\Http\Controllers\Patrimonio;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Localizacao;

class LocalizacaoController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Localizacao  $Localizacao
     * @return \Illuminate\Http\Response
     */
    public function show(Patrimonio $patrimonio)
    {
        return $patrimonio->localizacao;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Localizacao  $Localizacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localizacao $Localizacao)
    {
        //
    }
}
