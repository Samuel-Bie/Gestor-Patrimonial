<?php
namespace App\Http\Controllers\Patrimonio\Tools;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Http\Resources\Patrimonio\Tools\FormaDeAquisicao\FormaDeAquisicaoCollection;
use App\Http\Resources\Patrimonio\Tools\FormaDeAquisicao\FormaDeAquisicaoBasicResource;

class FormaDeAquisicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formas = FormaDeAquisicao::paginate();
        return (new FormaDeAquisicaoCollection($formas));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Tools\FormaDeAquisicao  $forma
     * @return \Illuminate\Http\Response
     */
    public function show(FormaDeAquisicao $forma_aquisicao)
    {
        return new FormaDeAquisicaoBasicResource($forma_aquisicao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Tools\FormaDeAquisicao  $forma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormaDeAquisicao $forma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Tools\FormaDeAquisicao  $forma
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormaDeAquisicao $forma)
    {
        //
    }
}
