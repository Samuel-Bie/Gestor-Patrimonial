<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio\Ficheiro;
use Illuminate\Http\Request;

class FicheiroController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Ficheiro  $ficheiro
     * @return \Illuminate\Http\Response
     */
    public function show(Ficheiro $ficheiro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrimonio\Ficheiro  $ficheiro
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficheiro $ficheiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Ficheiro  $ficheiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficheiro $ficheiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Ficheiro  $ficheiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficheiro $ficheiro)
    {
        //
    }
}
