<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio\Transferencia\DadosTransferencia;
use Illuminate\Http\Request;
use App\Http\Resources\Patrimonio\Operations\Transferencia\TransferenciaCollection;

class DadosTransferenciaController extends Controller
{

    public function index()
    {
        //
        $transferencias = DadosTransferencia::paginate();
        return (new TransferenciaCollection($transferencias));
    }


    public function store(Request $request)
    {
        //
    }

    public function show(DadosTransferencia $dadosTransferencia)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Transferencia\DadosTransferencia  $dadosTransferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DadosTransferencia $dadosTransferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Transferencia\DadosTransferencia  $dadosTransferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(DadosTransferencia $dadosTransferencia)
    {
        //
    }
}
