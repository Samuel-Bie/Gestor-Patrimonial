<?php
namespace App\Http\Controllers\Universidade;


use App\Models\Delegacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Universidade\Delegacao\DelegacaoCollection;

class DelegacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $delegacoes = Delegacao::paginate();
        return (new DelegacaoCollection($delegacoes));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delegacao  $delegacoes
     * @return \Illuminate\Http\Response
     */
    public function show(Delegacao $delegacoes)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delegacao  $delegacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delegacao $delegacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delegacao  $delegacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delegacao $delegacoes)
    {
        //
    }
}
