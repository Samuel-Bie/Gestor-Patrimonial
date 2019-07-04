<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio\Localizacao;
use Illuminate\Http\Request;
use App\Models\Patrimonio\Patrimonio;

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
