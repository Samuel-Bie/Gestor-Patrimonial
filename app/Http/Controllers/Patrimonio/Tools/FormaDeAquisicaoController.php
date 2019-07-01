<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Http\Resources\Patrimonio\Tools\FormaDeAquisicao\FormaDeAquisicaoCollection;

class FormaDeAquisicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formas = FormaDeAquisicao::paginate();
        return (new FormaDeAquisicaoCollection($formas));
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
     * @param  \App\Models\Patrimonio\Tools\FormaDeAquisicao  $formaDeAquisicao
     * @return \Illuminate\Http\Response
     */
    public function show(FormaDeAquisicao $formaDeAquisicao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Tools\FormaDeAquisicao  $formaDeAquisicao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormaDeAquisicao $formaDeAquisicao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Tools\FormaDeAquisicao  $formaDeAquisicao
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormaDeAquisicao $formaDeAquisicao)
    {
        //
    }
}
