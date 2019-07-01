<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Http\Resources\Patrimonio\Tools\ClassificadorGeral\ClassificadorGeralCollection;

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
     * @param  \App\Models\Patrimonio\Tools\ClassificadorGeral  $classificadorGeral
     * @return \Illuminate\Http\Response
     */
    public function show(ClassificadorGeral $classificadorGeral)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Tools\ClassificadorGeral  $classificadorGeral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassificadorGeral $classificadorGeral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Tools\ClassificadorGeral  $classificadorGeral
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassificadorGeral $classificadorGeral)
    {
        //
    }
}
