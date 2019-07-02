<?php
namespace App\Http\Controllers\Patrimonio;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Http\Resources\Patrimonio\Ficheiro\FicheiroCollection;
use App\Http\Resources\Patrimonio\Patrimonio\PatrimonioCollection;
use App\Http\Resources\Patrimonio\Patrimonio\PatrimonioBasicResource;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bens = Patrimonio::paginate();
        return (new PatrimonioCollection($bens));
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
     * @param  \App\Models\Patrimonio\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Patrimonio $patrimonio)
    {
        return new PatrimonioBasicResource($patrimonio);
    }

    public function files(Patrimonio $patrimonio)
    {
        $ficheiros = $patrimonio->ficheiros()->paginate();
        return (new FicheiroCollection($ficheiros));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrimonio $patrimonio)
    {
        //
    }
}
