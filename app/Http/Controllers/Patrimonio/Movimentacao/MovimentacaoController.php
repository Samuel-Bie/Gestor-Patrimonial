<?php
namespace App\Http\Controllers\Patrimonio\Movimentacao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
use App\Http\Resources\Patrimonio\Operations\Movimentacao\MovimentacaoCollection;

class MovimentacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patrimonio $patrimonio)
    {
        $movimentacoes = $patrimonio->movimentacoes()->paginate();
        return (new MovimentacaoCollection($movimentacoes));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Movimentacao\Movimentacao  $movimentacao
     * @return \Illuminate\Http\Response
     */
    public function show(Movimentacao $movimentacao)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Movimentacao\Movimentacao  $movimentacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimentacao $movimentacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Movimentacao\Movimentacao  $movimentacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimentacao $movimentacao)
    {
        //
    }
}
