<?php
namespace App\Http\Controllers\Patrimonio\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Transferencia\Transferencia;
use App\Http\Resources\Patrimonio\Operations\Abate\AbateGeneralResource;
use App\Http\Resources\Patrimonio\Operations\Transferencia\TransferenciaCollection;
use App\Http\Resources\Patrimonio\Operations\Transferencia\TransferenciaGeneralResource;

class TransferenciaController extends Controller
{

    public function index(Patrimonio $patrimonio)
    {
        //
        $transferencia = $patrimonio->transferencia;
        return new TransferenciaGeneralResource($transferencia);

        $transferencias = Transferencia::paginate();
        return (new TransferenciaCollection($transferencias));
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Patrimonio $patrimonio, Transferencia $transferencia)
    {
        return new TransferenciaGeneralResource($transferencia);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Transferencia\Transferencia  $transferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transferencia $transferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Transferencia\Transferencia  $transferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transferencia $transferencia)
    {
        //
    }
}
