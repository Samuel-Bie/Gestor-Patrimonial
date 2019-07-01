<?php

namespace App\Http\Controllers;

use App\Models\Delegacoes;
use Illuminate\Http\Request;
use App\Http\Resources\Universidade\Delegacao\DelegacaoCollection;

class DelegacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $delegacoes = Delegacoes::paginate();
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
     * @param  \App\Models\Delegacoes  $delegacoes
     * @return \Illuminate\Http\Response
     */
    public function show(Delegacoes $delegacoes)
    {
        //
    }


    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delegacoes  $delegacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delegacoes $delegacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delegacoes  $delegacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delegacoes $delegacoes)
    {
        //
    }
}
