<?php
namespace App\Http\Controllers\Patrimonio\Tools;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Http\Resources\Patrimonio\Tools\ClassificadorGeral\ClassificadorGeralCollection;
use App\Http\Resources\Patrimonio\Tools\ClassificadorGeral\ClassificadorGeralBasicResource;

class ClassificadorGeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = ClassificadorGeral::paginate();
        return (new ClassificadorGeralCollection($classes));
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
     * @param  \App\Models\Patrimonio\Tools\ClassificadorGeral  $classificador
     * @return \Illuminate\Http\Response
     */
    public function show(ClassificadorGeral $classificador)
    {
        return new ClassificadorGeralBasicResource($classificador);
    }
    public function bens(ClassificadorGeral $classificador){

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Tools\ClassificadorGeral  $classificador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassificadorGeral $classificador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Tools\ClassificadorGeral  $classificador
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassificadorGeral $classificador)
    {
        //
    }
}
