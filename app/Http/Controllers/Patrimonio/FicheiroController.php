<?php
namespace App\Http\Controllers\Patrimonio;

use Illuminate\Http\Request;
use App\Models\Patrimonio\Ficheiro;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Patrimonio\Ficheiro\FicheiroCollection;
use App\Http\Resources\Patrimonio\Ficheiro\FicheiroGeneralResource;

class FicheiroController extends Controller
{
    public function index()
    {
        $ficheiros = Ficheiros::paginate();
        return (new FicheiroCollection($ficheiros));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Ficheiro  $ficheiro
     * @return \Illuminate\Http\Response
     */
    public function show(Ficheiro $ficheiro)
    {
        //php
    }

    public function store(Request $request){
        $file = $request->file('file');

        $name = 'patrimonio/'.Hash::make($file);
        $file = $file->store($name);

        $ficheiro = new Ficheiro();
        $ficheiro->path = 'storage/'.$file;
        $ficheiro->save();
        return (new FicheiroGeneralResource($ficheiro));
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
