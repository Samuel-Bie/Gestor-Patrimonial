<?php
namespace App\Http\Controllers\Patrimonio\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Transferencia\Transferencia;
use App\Http\Resources\Patrimonio\Operations\Transferencia\TransferenciaCollection;

class TransferenciaController extends Controller
{

    public function index()
    {
        //
        $transferencias = Transferencia::paginate();
        return (new TransferenciaCollection($transferencias));
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Transferencia $Transferencia)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Transferencia\Transferencia  $Transferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transferencia $Transferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Transferencia\Transferencia  $Transferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transferencia $Transferencia)
    {
        //
    }
}
